<!doctype html>
<html lang="fr" class="h-100 w-100 certif">
    <head>

        {{--Favicon--}}
        <link rel="icon" href="{{env('APP_URL')}}favicon.ico" />
        
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="page" content="@yield('page')">

        @yield('extra-meta')

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')"/>

        {{-- CSS --}}
        @section('css')
        {!! Html::style(mix('/css/app.css')) !!}
        @show

        @yield('captcha')

        
        {{--@if(env('ANALYTICS') ?? false)
            {!!env('ANALYTICS')!!}
        @endif--}}

        
        @yield('extra-css')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    </head>

    <body @yield('body-attr')>
        <!-- Matomo -->
        <script>
            var _paq = window._paq = window._paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
            var u="https://prodice.matomo.cloud/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '7']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src='//cdn.matomo.cloud/prodice.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
            })();
        </script>
        <!-- End Matomo Code -->
        

        {{-- Header --}}
        @yield('header')

        {{-- Content --}}
        <main class="content" style="height: calc(100% - 60px)">
            @yield('content')
        </main>

        {{-- Footer --}}
        @yield('footer')

        <!-- START Bootstrap-Cookie-Alert -->
        <div class="alert text-center cookiealert" role="alert">
            <b>Vous aimez les cookies ?</b> &#x1F36A; Nous utilisons des cookies afin d'améliorer votre expérience utilisateur. <a href="https://cookiesandyou.com/" target="_blank">Pour en savoir plus</a>

            <button type="button" class="btn btn-primary btn-sm acceptcookies">
                Accepter
            </button>
        </div>
        <!-- END Bootstrap-Cookie-Alert -->

        {{-- JavaScript --}}
        
        @section('script')
        <script src="https://kit.fontawesome.com/4236d13d2d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
        
        <script src={{mix('/js/app.js')}} async></script>
        @yield('extra-js')
        @show
        
    </body>
</html>
