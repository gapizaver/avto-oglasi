@props(["code" => ""])

@switch($code)
    @case("c")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-yellow-500 text-white rounded py-0.5"])}}
        >
            Karambolirano
        </span>
        @break
    @case("n")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-green-500 text-white rounded py-0.5"])}}
        >
            Novo
        </span>
        @break
    @case("u")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-purple-500 text-white rounded py-0.5"])}}
        >
            Rabljeno
        </span>
        @break
    @case("li")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Limuzina
        </span>
        @break
    @case("hb")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Kombilimuzina
        </span>
        @break
    @case("ca")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Karavan
        </span>
        @break
    @case("co")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Coupe
        </span>
        @break
    @case("mv")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Enoprostorec
        </span>
        @break
    @case("cb")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Cabrio
        </span>
        @break
    @case("su")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            SUV
        </span>
        @break
    @case("pu")
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            Pick-up
        </span>
        @break

    @default
        <span
            {{$attributes->merge(["class" =>
            "text-xs px-2 font-medium bg-gray-500 text-white rounded py-0.5"])}}
        >
            {{ $slot }}
        </span>
@endswitch
