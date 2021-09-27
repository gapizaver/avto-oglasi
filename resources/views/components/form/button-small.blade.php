<button
    {{ $attributes->merge(["class" =>
        "bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 w-full
        md:w-auto py-2 rounded-full shadow hover:shadow-md hover:bg-purple-600 outline-none
        focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
    ]) }}
    >
    {{ $slot }}
</button>
