<header>
    <div class="container" id="header-main">
        <div class="row">
            <div class="col-12 col-md-3">
                <div id="logo" class="px-5 mt-2">
                    <a href="{{url('/')}}" class="d-inline-block h-80 w-100">
                        <img src="{{asset('img/header/logo.png')}}"/>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-3">
                <div id="devis-btn" class="mt-4 text-center">
                    <a href="{{route('contact')}}">
                        <span class="grey">DEMANDER</span>
                        <span class="yellow"> UN DEVIS</span>
                        <span class="devis-icon btn btn-circle btn-yellow ml-2"><i class="fas fa-euro-sign"></i></span>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-3">
                <div id="contact-btn" class="mt-4 text-center">
                    <a href="tel:0482534478" class='btn btn-blue rounded-pill font-weight-bold px-3'>
                        <span>04 82 53 44 78</span>
                        <span class="ml-3 contact-icon text-white"><img height="20px" width="20px" src="{{asset('img/header/headset.png')}}"/></span>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div id="search" class="my-4">

                        <form method="post" action="{{route('recherche')}}" class="input-group mb-3 border rounded">
                            @csrf
                            <input name="search" type="text" placeholder="Recherche" class="pl-3 form-control border-0" aria-describedby="search">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
   
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div id='menu'>
            <div class="container">
                <nav class="navbar navbar-expand-lg px-1 navbar-light position-static">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-nav" aria-controls="menu-nav" aria-expanded="false" aria-label="Menu mobile">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu-nav">
                        <ul class="navbar-nav mt-2 mt-lg-0 row w-100 mx-0">
                            <li class="nav-item active col-12 col-lg-3 text-center dropdown position-static">
                                <a class="nav-link dropdown-toggle" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Domaines
                                </a>
                                <div class="dropdown-menu" aria-labelledby="domaines" id="domaines-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                            @foreach($categories as $category)
                                                <div class="col-12 col-md-3 text-center">
                                                    <a class="dropdown-item" href="{{route('categorie', ['slug' => $category->slug])}}">{{$category->nom}}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{--<li class="nav-item col-12 col-lg-3 text-center">
                                <a class="w-100 d-inline-block py-2" href="">Types</a>
                            </li>--}}
                            <li class="nav-item col-12 col-lg-3 text-center dropdown position-static">
                                <a class="nav-link dropdown-toggle w-100 d-inline-block py-2" href="#" id="infos-pratiques" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Infos pratiques</a>
                                <div class="dropdown-menu" aria-labelledby="infos-pratiques" id="infos-pratiques-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                                <div class="col-12 col-md-3 text-center">
                                                    <a class="dropdown-item" href="{{route('demarche_qualite')}}">Démarche qualité</a>
                                                </div>
                                                <div class="col-12 col-md-3 text-center">
                                                    <a class="dropdown-item" href="{{route('contact_recrutement')}}">Recrutement</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-12 col-lg-3 text-center">
                                <a class="w-100 d-inline-block py-2" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
