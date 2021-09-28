@props(['name'])

@php
    $class = "px-2 py-2 placeholder-gray-500 text-blueGray-600 relative bg-white
        rounded text-sm border-0 shadow outline-none focus:outline-none
        focus:ring focus:ring-purple-400 mt-2 md:mt-0 w-28 mr-2";
@endphp

<label class="block my-4">
    <span class="text-gray-700 text-lg">
        {{ $slot }}
    </span>
    <br>
    <input
        {{ $attributes->merge(["class" => $class]) }}
        type="number"
        placeholder="min"
        name="{{ $name }}Min"
        value="{{ old($name . 'Min') }}"
    >

    <input
        {{ $attributes->merge(["class" => $class]) }}
        type="number"
        placeholder="max"
        name="{{ $name }}Max"
        value="{{ old($name . 'Max') }}"
    >

    <x-form.error name="{{ $name }}" />
</label>
