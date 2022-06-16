<footer class='mt-5'>
    <div class="container bg-dark text-white">    
        <div class="row pt-3">
            <div class="col-12 col-md-6 text-left px-5">
                <p class="pt-5 text-left mb-4">Texte du footer, modifiable depuis le back office, de longueur variable et affiché de manière responsive.</p>
            </div>
            <div class="col-12 col-md-6 px-5 text-center">
                <p class="h5"><b>Liens utiles</b></p>
                <a href="{{ route("page",["slug"=>"mentions-legales"]) }}" class="w-100 d-inline-block ">
                    Mentions légales
                </a>
                <a href="#" class="w-100 d-inline-block ">
                    Lien 1
                </a>
                <a href="#" class="w-100 d-inline-block ">
                    Lien 2
                </a>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12 text-center">
                <span>{{env('APP_NAME')}} - Copyright 2022 - Tous droits reserves. | </span>
                <a href="{{route('mentions_legales')}}">Mentions legales</a> 
                
            </div>
        </div>
    </div>
</footer>