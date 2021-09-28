@props(['oldVal'])

<label class="inline-flex items-center mr-6 cursor-pointer ">
    <input
    {{ $attributes->except("checked")->merge(["type" => "checkbox"]) }}

    {{-- determine if checkbox should be checked --}}
    @if (isset($oldVal))
        @if ($oldVal == $attributes["value"])
            checked
        @endif
    @else
        @if(old($attributes["name"]) != null)
            @if (old($attributes["name"]) == $attributes["value"])
                checked
            @endif
        @else
            @if ($attributes["checked"] ?? "" == "true")
                checked
            @endif
        @endif
    @endif
    >

    <span class="ml-2 ">{{ $slot }}</span>
  </label>
