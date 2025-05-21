<flux:navlist variant="outline">
    <flux:navlist.group :heading="__('Main Menu')" class="grid">
        <x-app-menu-item label="Dashboard" icon="layout-grid" route="dashboard" />
        <x-app-menu-item label="News" icon="newspaper" />
        <x-app-menu-item label="Events" icon="calendar" />
        <x-app-menu-item label="Devotion" icon="book-open" />
        <x-app-menu-item label="Fundings" icon="hand-coins" />
        <x-app-menu-item label="Users" icon="users" />
    </flux:navlist.group>
    <flux:navlist.group expandable heading="{{ __('Organization') }}">
        <x-app-menu-item label="Churches" />
        <x-app-menu-item label="Boards" />
        <x-app-menu-item label="Finances" />
        <x-app-menu-item label="Structural" />
    </flux:navlist.group>
</flux:navlist>
