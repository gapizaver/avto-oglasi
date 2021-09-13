<script>
    function onClick() {
        var dd = document.getElementById("dropdown");
        if (dd.style.display == "none") {
            dd.style.display = "inline-block";
        } else {
            dd.style.display = "none";
        }
    }
</script>

{{-- sort by dropdown menu --}}

<div>
    <button onclick="onClick()">Razvrsti po</button>
    <div
        style="display: none; position: absolute; background-color: white;"
    id="dropdown" hidden="true">
        <ul>
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
        </ul>
    </div>
    <br>
  </div>
