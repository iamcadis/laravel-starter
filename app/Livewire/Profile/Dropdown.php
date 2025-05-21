<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dropdown extends Component
{
    public string $position = 'top';
    public string $align = 'end';
    public bool $mobile = false;

    public ?User $user = null;

    protected $listeners = ['profileUpdated' => 'refreshUser'];

    public function mount(string $position = 'top', string $align = 'end', bool $mobile = false): void
    {
        $this->position = $position;
        $this->align = $align;
        $this->mobile = $mobile;
        $this->refreshUser();
    }

    public function render()
    {
        return view('livewire.profile.dropdown');
    }

    public function refreshUser(): void
    {
        $this->user = Auth::user();
    }
}
