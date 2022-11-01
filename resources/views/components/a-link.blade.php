@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500'
            : 'flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>