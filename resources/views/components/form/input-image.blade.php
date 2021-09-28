@props(["text" => "Naloži fotografije"])

<label
    id="image-label"
    class="w-64 flex flex-col items-center px-2 py-4 bg-white rounded-lg shadow-md mt-6
    tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600
    hover:text-white text-purple-600 ease-linear transition-all duration-150">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
    <span class="mt-2 text-base leading-normal">{{ $text }}</span>
    <input
        id="img_input"
        name="images[]"
        type="file"
        class="hidden"
        multiple
    />
</label>

<div id="img-holder" class="my-4">{{ $slot }}</div>

<x-form.error name="images" />
