<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 py-3">
                <a href="{{url('/')}}" class="blue">Accueil</a>
                <span>&gt;</span>
                @if($formation ?? false)
                    <a href="{{route('categorie', ['slug' => $formation->categorie()->first()->slug])}}" class="blue">{{$formation->categorie()->first()->nom}}</a>
                    <span>&gt;</span>
                    <a href="{{route('sous_categorie', ['slug' => $formation->sous_categorie()->first()->slug])}}" class="blue">{{$formation->sous_categorie()->first()->nom}}</a>
                    <span>&gt;</span>
                    <span>{{$formation->titre}}</span>
                @else 
                    @if($categorie ?? false)
                        <span>{{$categorie->nom}}</span>
                    @else 
                    <a href="{{route('categorie', ['slug' => $sous_categorie->parent()->first()->slug])}}" class="blue">
                        {{$sous_categorie->parent()->first()->nom}}
                    </a>
                    <span>&gt;</span>
                    <span>{{$sous_categorie->nom}}</span>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>