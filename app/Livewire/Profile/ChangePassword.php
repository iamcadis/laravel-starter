<?php

namespace App\Livewire\Profile;

use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Livewire\Component;

class ChangePassword extends Component
{
    public string $password = '';
    public string $password_confirmation = '';

    public function render()
    {
        return view('livewire.profile.change-password');
    }

    public function updatePassword(): void
    {
        $validated = $this->validate([
            'password' => ['required', 'string', PasswordRule::defaults(), 'confirmed'],
        ]);

        Auth::user()->update(['password' => Hash::make($validated['password'])]);
        Flux::modal('change-password')->close();
        $this->dispatch('password-updated');
    }

    public function resetForm()
    {
        $this->reset();
        $this->resetErrorBag();
    }
}
