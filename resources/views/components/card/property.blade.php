@props(["property", "value", "pClass" => ""])

<div
    {{ $attributes->except("pClass")->merge(["class" =>
        "flex justify-between py-1"]) }}
>
    <p class="text-gray-700 {{ $pClass }}">{{ $property }}</p>
    <p class="text-gray-700 {{ $pClass }} font-bold">{{ $value }}</p>
</div>
