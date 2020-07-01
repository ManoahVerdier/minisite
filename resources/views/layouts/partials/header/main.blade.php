<header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div id="logo" class="px-5 mt-2">
                    <a href="{{url('/')}}" class="d-inline-block h-80 w-100">
                        <img src="{{asset('img/header/logo.png')}}"/>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-4">
                <div id="devis-btn" class="mt-4 text-center">
                    <span class="grey">DEMANDER</span>
                    <span class="yellow"> UN DEVIS</span>
                    <span class="devis-icon btn btn-circle btn-yellow ml-2"><i class="fas fa-euro-sign"></i></span>
                </div>
            </div>
            <div class="d-none d-md-block col-4">
                <div id="contact-btn" class="mt-4 text-center">
                    <a href="tel:0482534478" class='btn btn-blue rounded-pill font-weight-bold px-3'>
                        <span>04 82 53 44 78</span>
                        <span class="ml-3 contact-icon text-white"><img height="20px" width="20px" src="{{asset('img/header/headset.png')}}"/></span>
                    </a>
                </div>
            </div>
            {{--<div class="col-3">
                <div id="search" class="my-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="search">
                        <div class="input-group-append">
                            <span class="input-group-text" id="search">Recherche</span>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
    <div class="container-fluid px-0">
        <div id='menu'>
            <div class="container">
                <nav class="navbar navbar-expand-lg row py-1 mt-2">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="col-3 text-center"><a class="w-100 d-inline-block py-2" href="">Domaines</a></div>
                        <div class="col-3 text-center"><a class="w-100 d-inline-block py-2" href="">Types</a></div>
                        <div class="col-3 text-center"><a class="w-100 d-inline-block py-2" href="">Divers</a></div>
                        <div class="col-3 text-center"><a class="w-100 d-inline-block py-2" href="">Contact</a></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
