<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditForm extends Component
{
    protected $listeners = ['resetForm' => 'resetForm'];

    public string $name = '';
    public string $email = '';

    public function render()
    {
        return view('livewire.profile.edit-form');
    }

    public function mount(): void
    {
        $this->resetForm();
    }

    public function updateProfileInformation(): void
    {
        $user = Auth::user();
        $validated = $this->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)]
        ]);

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();
        $this->dispatch('profileUpdated');
        Flux::modal('edit-profile')->close();
        Auth::setUser($user);
    }

    public function resetForm()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->resetErrorBag();
    }
}
