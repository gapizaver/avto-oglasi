@props(["key"])

@if (session()->has($key))
    <p class="fixed bg-blue-500 text-white py-2 px-4 bottom-3 right-3">
        {{ session($key) }}
    </p>
@endif
