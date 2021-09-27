<button
    {{ $attributes->merge(["class" =>
        "bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-sm w-full
        px-6 py-3 rounded-full shadow hover:shadow-lg hover:bg-purple-600 outline-none
        focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 md:w-auto"
    ]) }}
    >
    {{ $slot }}
</button>
