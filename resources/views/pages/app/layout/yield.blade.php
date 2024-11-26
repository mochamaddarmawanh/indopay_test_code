{{-- head --}}
@include('pages.app.layout.head')

<body>

    {{-- switcher --}}
    @include('pages.app.layout.switcher')

    <!-- Loader -->
    <div id="loader">
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">

        {{-- header --}}
        @include('pages.app.layout.header')

        {{-- aside --}}
        @include('pages.app.layout.aside')

        {{-- content --}}
        @yield('content')

        {{-- modals --}}
        @include('pages.app.layout.modals')

        {{-- footer --}}
        @include('pages.app.layout.footer')

    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    {{-- foot --}}
    @include('pages.app.layout.foot')

    {{-- custom sript --}}
    @yield('custom_script')

</body>

</html>
