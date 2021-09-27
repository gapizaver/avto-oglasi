@props(["name"])

@error($name)
    <p class="text-red-500 text-sm font-bold">{{ $message }}</p>
@enderror
