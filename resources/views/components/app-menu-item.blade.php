@props(['label', 'icon' => null, 'route' => null])

@if(empty($route))
<flux:navlist.item icon="{{ $icon }}">{{ __($label) }}</flux:navlist.item>
@else
<flux:navlist.item icon="{{ $icon }}" :href="route($route)" :current="request()->routeIs($route)" wire:navigate>{{ __($label) }}</flux:navlist.item>
@endif
