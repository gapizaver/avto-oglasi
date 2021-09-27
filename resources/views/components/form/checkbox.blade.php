<label class="inline-flex items-center mr-6 cursor-pointer ">
    <input
        {{ $attributes->merge(["type" => "checkbox"]) }}>
    <span class="ml-2 ">{{ $slot }}</span>
  </label>
