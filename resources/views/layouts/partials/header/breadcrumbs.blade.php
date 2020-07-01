<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 py-3">
                <a href="{{url('/')}}" class="blue">Accueil</a>
                <span>&gt;</span>
                <a href="{{url('/')}}" class="blue">{{$formation->categorie}}</a>
                <span>&gt;</span>
                <a href="{{url('/')}}" class="blue">{{$formation->sous_categorie}}</a>
                <span>&gt;</span>
                <span>{{$formation->titre}}</span>
            </div>
        </div>
    </div>
</section>