@props(['active'])

<a {{ $attributes->merge(['class' => 'text-rose-500 hover:text-rose-600 rounded-full']) }}>
    {{ $slot }}
</a>
