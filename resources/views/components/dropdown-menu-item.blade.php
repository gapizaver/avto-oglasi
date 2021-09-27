@props(["active" => false])


@php
    # add background color if active
    $class = "text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
             bg-transparent";
    if ($active) $class .= " bg-purple-600 text-white";
    else $class .= " bg-white hover:bg-gray-100 text-gray-700"
@endphp


<a
    {{ $attributes->merge(["class" => $class]) }}
>
        {{ $slot }}
</a>
