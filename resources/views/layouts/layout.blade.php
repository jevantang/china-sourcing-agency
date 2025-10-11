<!doctype html>
<html lang="{{ str_replace('zh-h', 'zh-H', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - CompanyName</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta name="author" content="CompanyName Pte. Ltd.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/assets/images/icon.png">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?v={{ config('app.version') }}">
    @foreach(config('app.locales') as $code => $name)
        <link rel="alternate" href="{{ LaravelLocalization::getLocalizedURL($code) }}" hreflang="{{ str_replace('zh-h', 'zh-H', $code) }}">
    @endforeach
    @stack('style')
</head>

<body>
    {{-- Header --}}
    <header>
        @include('layouts.header')
    </header>

    {{-- Main --}}
    <main>
        @yield('content')

        @include('layouts.contacts')
    </main>

    {{-- Footer --}}
    <footer>
        @include('layouts.footer')
    </footer>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/starteam.js?v={{ config('app.version') }}"></script>
    @stack('script')
</body>

</html>
