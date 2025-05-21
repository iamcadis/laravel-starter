<flux:modal class="lg:w-96 w-10/12" name="edit-profile" @close="resetForm" :dismissible="false">
    <form wire:submit.prevent="updateProfileInformation" class="w-full space-y-6">
        <div>
            <flux:heading size="lg">{{ __('Edit Profile') }}</flux:heading>
            <flux:text class="mt-1">{{ __('Make changes to your personal details.') }}</flux:text>
        </div>

        <flux:input wire:model="name" label="{{ __('Name') }}" placeholder="{{ __('Your Name') }}" type="text" required autofocus autocomplete="name" />
        <flux:input wire:model="email" label="{{ __('Email') }}" placeholder="email@exmaple.com" type="email" required autocomplete="email" />

        <div class="flex">
            <flux:spacer />
            <flux:button type="submit" variant="primary">{{ __('Save Changes') }}</flux:button>
        </div>
    </form>
</flux:modal>
