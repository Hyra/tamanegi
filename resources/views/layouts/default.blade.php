<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title ?? 'Website' }}</title>
    @livewireStyles
    @yield('og')
</head>

<body class="antialiased">
    @yield('content')

    <script src="{{ asset('js/app.js') }}" async></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GTM_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-40203772-4');

    </script>

    @livewireScripts
</body>

</html>
