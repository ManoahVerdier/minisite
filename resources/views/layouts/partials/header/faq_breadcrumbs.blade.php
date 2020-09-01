<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 py-3">
                <a href="{{url('/')}}" class="blue">Accueil</a>
                <span>&gt;</span>
                @if($faq ?? false)
                    <a href="{{route('categorie', ['slug' => $faq->faq_categorie()->firstOrFail()->slug])}}" class="blue">{{$faq->faq_categorie()->first()->slug}}</a>
                    <span>&gt;</span>
                    <span>{{$faq->question}}</span>
                @else 
                    @if($faq_categorie ?? false)
                        <span>{{$faq_categorie->nom}}</span>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>