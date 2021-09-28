@props(["name"])

@error($name)
    <p class="text-red-500 text-sm font-bold pt-1">{{ $message }}</p>
@enderror
