@props(["heading", "width" => 800])

<div class="p-8 shadow-md rounded-md text-left mx-auto my-10" style="max-width: {{ $width }}px" >
    <h2 class="text-2xl font-extrabold text-gray-700">{{ $heading }}</h2>

    <hr class="bg-gray-400 my-5">

    <form {{ $attributes }}>

    {{ $slot }}

    </form>
</div>