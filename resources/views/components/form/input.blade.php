@props(['name', "type" => "text", "oldVal"])

@php
    $class = "px-2 py-2 placeholder-gray-500 text-blueGray-600 relative bg-white
        rounded text-sm border-0 shadow outline-none focus:outline-none
        focus:ring focus:ring-purple-400 mt-2 md:mt-0 w-full";
@endphp

<label class="block my-4">
    <span class="text-gray-700 text-lg">
        {{ $slot }}
    </span>
    <br>
    <input
        {{ $attributes->merge(["class" => $class]) }}
        type="{{ $type }}"
        name="{{ $name }}"
        @unless ($type == "password")
            value="{{ old($name, $oldVal ?? "") }}"
        @endunless
    >

    <x-form.error name="{{ $name }}" />
</label>
