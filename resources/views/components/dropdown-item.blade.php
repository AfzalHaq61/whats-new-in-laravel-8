@props(['active' => false])

@php
    $classes = 'cursor-pointer block hover:bg-blue-500 hover:text-white focus:bg-blue-500 text-left text-sm leading-5 px-3 py-1';

    if($active) {
        $classes .= ' bg-blue-500 text-white';
    }
@endphp

<a
    {{ $attributes([ 'class' => $classes ]) }}>
    {{ $slot }}
</a>
