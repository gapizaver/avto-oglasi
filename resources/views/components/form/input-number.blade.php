@props(['name', "oldVal"])

@php
    $class = "px-2 py-2 placeholder-gray-500 text-blueGray-600 relative bg-white
        rounded text-sm border-0 shadow outline-none focus:outline-none
        focus:ring focus:ring-purple-400 mt-2 md:mt-0 w-28";
@endphp

<label class="block my-4">
    <span class="text-gray-700 text-lg">
        {{ $slot }}
    </span>
    <br>
    <input
        {{ $attributes->merge(["class" => $class]) }}
        type="number"
        maxlength="9"
        name="{{ $name }}"
        value="{{ old($name, $oldVal ?? "") }}"
    >

    <x-form.error name="{{ $name }}" />
</label>

