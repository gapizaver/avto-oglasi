<button {{$attributes->merge(["class"=>"absolute p-2.5 md:p-1.5 rounded shadow bg-gray-50
            hover:bg-gray-100 ease-linear transition-all duration-150"])}}
>
    {{ $slot }}
</button>
