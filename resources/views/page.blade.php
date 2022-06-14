@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection


{{-- Content --}}
@section('content')
    <div class="container">
        
        <div class="row my-3">
            <div class="col-12">
                <h1 class="my-3">{!!$page->title!!}</h1>
                <h2 class="my-3">{!!$page->subtitle!!}</h1>
                @for($i=1;$i<=5;$i++)
                    @if($i<=$page->stars)
                        <span class="fa fa-star text-primary"></span>
                    @else 
                        <span class="fa fa-star"></span>
                    @endif
                @endfor
            </div>
        </div>
        <div class="row my-3">
            <div class="col-8">
                <img src="{{ URL::asset("storage/".$page->img) }}" alt="{{ $page->title }}" class="img-fluid">
            </div>
            <div class="col-4">
                <p class="h3 text-center mb-3">Meilleurs prix</p>
                <a href="{{ $page->lien }}" class="btn btn-primary btn-block btn-lg text-white "><i class="fa fa-cart-plus mr-3"></i>Voir le prix</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 mb-3">
                <h3 class="border-bottom border-primary">Résumé</h3>
                {!!$page->resume!!}
                @for($i=1;$i<=5;$i++)
                    @if($i<=$page->stars)
                        <span class="fa fa-star text-primary"></span>
                    @else 
                        <span class="fa fa-star"></span>
                    @endif
                @endfor
            </div>
            <div class="col-12">
                <p class="h5">Points forts</p>
                {!!$page->points_forts!!}
            </div>
            <div class="col-12">
                <p class="h5">Points faibles</p>
                {!!$page->points_faibles!!}
            </div>
            <div class="col-12 mb-3">
                <p class="h5">Fiche technique/caractéristiques</p>
                {!!$page->contenu!!}
            </div>
            <div class="col-12">
                <h3 class="border-bottom border-primary">Présentation</h3>
                {!!$page->points_forts!!}
                <div class="text-center">
                    <a href="{{ $page->lien }}" class="btn btn-primary btn-lg text-white mb-3"><i class="fa fa-cart-plus mr-3"></i>Voir le prix</a>
                </div>
            </div>
            <div class="col-12">
                <p class="h5">Points forts</p>
                {!!$page->points_forts!!}
            </div>
            <div class="col-12">
                <p class="h5">Points faibles</p>
                {!!$page->points_faibles!!}
            </div>
            <div class="col-12">
                <h3 class="border-bottom border-primary">Conclusion</h3>
                {!! $page->conclusion !!}
                <div class="text-center">
                    <a href="{{ $page->lien }}" class="btn btn-primary btn-lg text-white mb-3"><i class="fa fa-cart-plus mr-3"></i>Voir le prix</a>
                </div>
            </div>
            {{-- <div class="col-12">
                <div id="accordion">
                    <div class="card bg-dark">
                        <div class="card-header" id="accordion">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Pour en savoir plus
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body bg-light">
                                {!!$page->accordion_text!!}                            
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection