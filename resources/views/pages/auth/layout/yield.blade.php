<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    {{-- head --}}
    @include('pages.app.layout.head')

</head>

<body class="bg-white">

    {{-- switcher --}}
    @include('pages.app.layout.switcher')

    {{-- content --}}
    @yield('content')

    {{-- foot --}}
    @include('pages.app.layout.foot')

</body>

</html>
