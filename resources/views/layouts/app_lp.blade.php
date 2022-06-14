<!doctype html>
<html lang="fr" class="h-100 w-100 certif">
    <head>

        {{--Favicon--}}
        <link rel="icon" href="{{env('APP_URL')}}favicon.ico" />
        
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="page" content="@yield('page')">

        @yield('extra-meta')

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')"/>

        {{-- CSS --}}
        @section('css')
            {{-- {!! Html::style(mix('/css/app.css')) !!} --}}
            <link rel="stylesheet" href="/test/css/bootstrap.css">
            <link rel="stylesheet" href="/test/fonts/icon-font/css/style.css">
            <link rel="stylesheet" href="/test/fonts/typography-font/typo.css">
            <link rel="stylesheet" href="/test/fonts/typography-font/lucida-grande/typo.css">
            <link rel="stylesheet" href="/test/fonts/fontawesome-5/css/all.css">

            <link rel="stylesheet" href="/test/plugins/aos/aos.min.css">
            <link rel="stylesheet" href="/test/plugins/fancybox/jquery.fancybox.min.css">
            <link rel="stylesheet" href="/test/plugins/nice-select/nice-select.min.css">
            <link rel="stylesheet" href="/test/plugins/slick/slick.min.css">

            <link rel="stylesheet" href="/test/plugins/theme-mode-switcher/switcher-panel.css">
            <link rel="stylesheet" href="/test/css/main.css">
        @show

        @yield('captcha')

        
        {{--@if(env('ANALYTICS') ?? false)
            {!!env('ANALYTICS')!!}
        @endif--}}

        
        @yield('extra-css')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    </head>

    <body data-theme="light" @yield('body-attr')>
        <div class="site-wrapper overflow-hidden">


            {{-- Header --}}
            @yield('header')

            {{-- Content --}}
            <main class="content" style="height: calc(100% - 60px)">
                @yield('content')
            </main>

            {{-- Footer --}}
            @yield('footer')



            {{-- JavaScript --}}
            @section('script')
                @yield('extra-js')
                <script src={{mix('/js/app.js')}} async></script>
                <!-- Vendor Scripts -->
                <script src="/test/js/vendor.min.js"></script>
                <!-- Plugin's Scripts -->
                <script src="/test/plugins/fancybox/jquery.fancybox.min.js"></script>
                <script src="/test/plugins/nice-select/jquery.nice-select.min.js"></script>
                <script src="/test/plugins/aos/aos.min.js"></script>
                <script src="/test/plugins/slick/slick.min.js"></script>
                <script src="/test/plugins/counter-up/jquery.waypoints.js"></script>
                <script src="/test/plugins/counter-up/jquery.counterup.js"></script>
                <script src="/test/plugins/theme-mode-switcher/gr-theme-mode-switcher.js"></script>
                <!-- Activation Script -->
                <script src="/test/js/custom.js"></script>
            @show
        </div>
    </body>
</html>
