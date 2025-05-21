<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo />
        </a>

        <x-app-menu-sidebar />

        <flux:spacer />

        <livewire:profile.dropdown position="bottom" align="start" key="desktop-profile" />
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <livewire:profile.dropdown position="top" align="end" mobile="true" key="mobile-profile" />
    </flux:header>

    <flux:main>
        {{ $slot }}
        <livewire:profile.edit-form />
        <livewire:profile.change-password />
    </flux:main>

    @fluxScripts
</body>
</html>
