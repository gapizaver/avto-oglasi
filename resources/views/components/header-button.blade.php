@props(["href" => "", "class" => ""])

@unless ($href == "")
    <a href="{{ $href }}">
@endunless

    <ul
    class="w-full text-sm py-2 font-bold hover:bg-purple-700 focus:bg-purple-700
        transition duration-300 ease-in-out text-center
        md:w-auto md:bg-purple-600 md:border-solid md:border-0 text-gray-50
        md:border-b-4 md:hover:bg-purple-600 md:px-4 md:pt-2 md:pb-1 md:inline-block
        {{-- check if on buttons route -> make button active --}}
        @if ("/".request()->path() == $href || request()->path()=="/" && $href == "/")
            bg-purple-700 md:border-gray-50
        @else
            bg-purple-500 md:border-purple-600 md:hover:border-gray-50 {{ $class }}
        @endif
        "
    >
        {{ $slot }}
    </ul>

@unless ($href == "")
    </a>
@endunless
