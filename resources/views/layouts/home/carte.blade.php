<div class="container my-5">
    <div class="row mx-0">
        <div class="card-deck">
            @foreach($produits as $produit)
                <div class="card bg-dark text-white">
                    <img class="card-img-top" src="{{ asset('storage/'.$produit->img) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produit->title }} </h5>
                        <p class="card-text text-white">{!! $produit->excerpt !!}</p>
                        
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-block btn-primary">Voir le produit</a>
                    </div>
                </div>
            @endforeach
            {{-- <div class="card">
                <img class="card-img-top" src="https://picsum.photos/272/180" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Autre exemple de page</h5>
                    <p class="card-text">Description sommaire de la page, le reste est affiché en cliquant sur le lien, qui est cette fois dans le footer.</p>
                </div>
                <div class="card-footer">
                <a href="#"><small class="text-muted">Lire la suite</small></a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://picsum.photos/271/181" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Page produit</h5>
                    <p class="card-text">Extrait de la page produit. Le lien permet de consulter le reste de la page, et le footer d'accéder au comparatif</p>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
                <div class="card-footer">
                    <a href="#"><small class="text-muted">Voir le comparatif complet</small></a>
                </div>
            </div>--}}
        </div>
    </div>
</div>