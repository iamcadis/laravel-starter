<flux:modal class="lg:w-96 w-10/12" name="change-password" @close="resetForm" :dismissible="false">
    <form wire:submit.prevent="updatePassword" class="w-full space-y-6">
        <div>
            <flux:heading size="lg">{{ __('Change Password') }}</flux:heading>
            <flux:text class="mt-1">{{ __('Update your password for security reasons.') }}</flux:text>
        </div>

        <flux:input wire:model="password" label="{{ __('New Password') }}" type="password" required autofocus autocomplete="new-password" viewable />
        <flux:input wire:model="password_confirmation" label="{{ __('Confirm Password') }}" type="password" required autocomplete="new-password" viewable />

        <div class="flex">
            <flux:spacer />
            <flux:button type="submit" variant="primary">{{ __('Save Changes') }}</flux:button>
        </div>
    </form>
</flux:modal>
