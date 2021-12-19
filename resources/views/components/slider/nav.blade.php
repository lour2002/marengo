@props(['direction' => 'forward'])

<button
    type="button"
    {{ $attributes->merge(['class' =>"nav-arrow image-background disabled:invisible " .
                                     (($direction === 'backward') ? 'rotate-180 --backward' : '')]) }}
></button>
