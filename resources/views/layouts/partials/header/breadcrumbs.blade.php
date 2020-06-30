<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 py-3">
                <a href="{{url('/')}}">Accueil</a>
                <span>&gt;</span>
                <a href="{{url('/')}}">{{$formation->categorie}}</a>
                <span>&gt;</span>
                <a href="{{url('/')}}">{{$formation->sous_categorie}}</a>
                <span>&gt;</span>
                <a href="{{url('/')}}">{{$formation->titre}}</a>
            </div>
        </div>
    </div>
</section>