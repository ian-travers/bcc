<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.querySelector("form").submit();
        }
    </script>
</head>
<body>
@include('partials/header')
{{ $slot }}
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>


