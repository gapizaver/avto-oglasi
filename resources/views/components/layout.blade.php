<!DOCTYPE html>
<html>

<head>

    <title>Avtonet replika</title>

    {{-- Tailwind --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- javascript --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/script.js')}}"></script>

</head>

<body class="bg-gray-50">


    @include("_header")

    {{ $slot }}


    {{-- flash messages --}}
    <x-flash-message key="success" />

    @include("_footer")

</body>
</html>
