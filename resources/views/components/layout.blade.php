<!DOCTYPE html>
<html>

<head>
    <title>Avtonet replika</title>
    {{-- Tailwind --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-color: rgb(100, 100, 100)">

    {{ $slot }}


{{-- flash messages --}}
<x-flash-message key="success" />

</body>
</html>
