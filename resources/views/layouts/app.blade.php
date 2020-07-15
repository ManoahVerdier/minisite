<!doctype html>
<html lang="fr" class="h-100 w-100">
    <head>

        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="page" content="@yield('page')">

        @yield('extra-meta')

        <title>@section('title', 'Cyn-formation')</title>

        {{-- CSS --}}
        @section('css')
        {!! Html::style(mix('/css/app.css')) !!}
        @show

        @yield('captcha')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9998670-20"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-9998670-20');
        </script>

        <script>
            function initFreshChat() {
                window.fcWidget.init({
                    token: "4b595a1a-4a6f-4b35-92ca-71f3abba4e57",
                    host: "https://wchat.eu.freshchat.com"
                });
            }
            function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.eu.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
        </script>
    </head>

    <body @yield('body-attr')>
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
        {!! Html::script(mix('/js/app.js')) !!}
        @show
    </body>
</html>