@props(["active" => false])

<li>
    <a
    {{-- add background color if active --}}
    @php
        $style = "display: inline-block;";
        if ($active) $style .= " background-color:red";
    @endphp

    {{ $attributes(["style" => $style]) }}
    href="#">
        {{ $slot }}
    </a>
</li>
