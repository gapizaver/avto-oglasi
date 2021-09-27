{{-- sort by dropdown menu --}}

<div class="relative w-full text-right px-4">
    <button
      class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs
            px-4 py-2.5 rounded-t-md hover:bg-purple-600 outline-none
            focus:outline-none ease-linear transition-all duration-150 w-full
            md:w-auto md:mr-4 mb-0 "
      type="button" onclick="onClick()">
      Sortiraj<i class="fas fa-angle-down ml-2"></i>
    </button>

    <div
        class="bg-white text-base z-50 right-0 py-2 list-none text-left rounded shadow-lg
                top-9 absolute hidden md:w-auto w-full"
        id="dropdown"
    >
        @php
            $order = request()->input("order");
        @endphp

        {{-- dropdown menu items --}}
        {{-- passing active and href parameters --}}
        <x-dropdown-menu-item
            :active="$order==null"
            href="/results?{{ http_build_query(request()->except('order', 'page')) }}">
            novejši oglasi najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='oldest'"
            href="/results?order=oldest&{{ http_build_query(request()->except('order', 'page')) }}">
            starejši oglasi najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='price'"
            href="/results?order=price&{{ http_build_query(request()->except('order', 'page')) }}">
            ceni - najmanjša najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='priceDesc'"
            href="/results?order=priceDesc&{{ http_build_query(request()->except('order', 'page')) }}">
            ceni - najvišja najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='mileage'"
            href="/results?order=mileage&{{ http_build_query(request()->except('order', 'page')) }}">
            prevoženih km - manj najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='mileageDesc'"
            href="/results?order=mileageDesc&{{ http_build_query(request()->except('order', 'page')) }}">
            prevoženih km - več najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='yearDesc'"
            href="/results?order=yearDesc&{{ http_build_query(request()->except('order', 'page')) }}">
            letniku - novejši najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='year'"
            href="/results?order=year&{{ http_build_query(request()->except('order', 'page')) }}">
            letniku - starejši najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='horsesDesc'"
            href="/results?order=horsesDesc&{{ http_build_query(request()->except('order', 'page')) }}">
            moči motorja - več najprej
        </x-dropdown-menu-item>

        <x-dropdown-menu-item
            :active="$order=='horses'"
            href="/results?order=horses&{{ http_build_query(request()->except('order', 'page')) }}">
            moči motorja - manj najprej
        </x-dropdown-menu-item>
    </div>
</div>
