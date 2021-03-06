<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">

    @stack('scripts')
</head>
<body>
@include('partials/header')
{{ $slot }}
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>


