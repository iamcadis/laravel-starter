<flux:dropdown class="{{ $mobile ? 'block lg:hidden' : 'hidden lg:block' }}" position="{{ $position }}" align="{{ $align }}">
    <flux:profile :name="$mobile ? '' : $user?->name" :initials="$user?->initials()" icon-trailing="{{ $mobile ? 'chevron-down' : 'chevrons-up-down' }}" />

    <flux:menu class="lg:w-[220px]">
        <flux:menu.radio.group>
            <div class="p-0 text-sm font-normal">
                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                    <flux:avatar size="sm" :initials="$user?->initials()" />

                    <div class="grid flex-1 text-start text-sm leading-tight">
                        <span class="truncate font-semibold">{{ $user?->name }}</span>
                        <span class="truncate text-xs">{{ $user?->email }}</span>
                    </div>
                </div>
            </div>
        </flux:menu.radio.group>

        <flux:menu.separator />

        <flux:menu.radio.group>
            <flux:modal.trigger name="edit-profile">
                <flux:menu.item icon="user-pen">{{ __('Edit Profile') }}</flux:menu.item>
            </flux:modal.trigger>
            <flux:modal.trigger name="change-password">
                <flux:menu.item icon="lock-keyhole">{{ __('Change Password') }}</flux:menu.item>
            </flux:modal.trigger>
        </flux:menu.radio.group>

        <flux:menu.separator />

        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:tooltip class="w-full" content="{{ __('Enable Light Theme') }}">
                <flux:radio class="h-full w-full cursor-pointer" value="light" icon="sun" />
            </flux:tooltip>
            <flux:tooltip class="w-full" content="{{ __('Enable Dark Theme') }}">
                <flux:radio class="h-full w-full cursor-pointer" value="dark" icon="moon" />
            </flux:tooltip>
            <flux:tooltip class="w-full" content="{{ __('Enable System Theme') }}">
                <flux:radio class="h-full w-full cursor-pointer" value="system" icon="computer-desktop" />
            </flux:tooltip>
        </flux:radio.group>

        <flux:menu.separator />

        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                {{ __('Log Out') }}
            </flux:menu.item>
        </form>
    </flux:menu>
</flux:dropdown>
