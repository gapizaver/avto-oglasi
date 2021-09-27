<div {{$attributes->merge([
    "class" => "w-full px-8 text-left mx-auto mb-10 mt-10",
    "style" => "max-width: 800px",
])}}>
    {{ $slot }}
</div>
