@props(['href','value'])

<a href="{{$href ?? $slot}}" {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</a>
