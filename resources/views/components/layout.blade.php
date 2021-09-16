<!DOCTYPE html>
<html>

<head>

    <title>Avtonet replika</title>

    {{-- Tailwind --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- javascript --}}
    <script src="{{ asset('js/script.js')}}"></script>

</head>

<body class="bg-gray-500">


    @include("_header")

    {{ $slot }}


{{-- flash messages --}}
<x-flash-message key="success" />

</body>
</html>
