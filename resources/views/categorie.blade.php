@extends('layouts.app')

@section('title', 'Cyn-formation')

@section('body-attr')
id="form-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.breadcrumbs')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container">
    <h1 class="w-100 text-center blue mb-3">{{$categorie->nom}}</h1>
    @foreach($categorie->sous_categories()->get() as $ss_categ)
        <div class="bg-grey w-100 p-2 mb-4 mt-4">
            <h2 class="blue h5 mb-0">Formations {{$ss_categ->nom}}</h2>
        </div>

        <div class="row border-bottom mx-2 mb-2">
            <div class="col-10 text-left font-weight-bold">Intitulé</div>
            <div class="col-2 text-center font-weight-bold">Durée</div>
        </div>
        @foreach($ss_categ->formations()->get() as $formation)
            <div class="row mx-2 my-2">
                @if($formation->slug ?? false)
                    <div class="col-10"><a href="{{route('formation_slug', ['slug' => $formation->slug])}}">{{$formation->nom}}</a></div>
                @else 
                    <div class="col-10"><a href="{{route('formation', ['id' => $formation->id])}}">{{$formation->nom}}</a></div>
                @endif
                <div class="col-2 text-center purple font-weight-bold">{{$formation->duree}}</div>
            </div>
        @endforeach
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection