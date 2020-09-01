@extends('layouts.app')

@section('title', env('APP_NAME').' - Recherche')

@section('body-attr')
id="search-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.mobile')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container mb-5">

    @if($search??false)
    <h1 class="w-100 text-center blue mb-4">{{$search}}</h1>
    @else 
    <h1 class="w-100 text-center blue mb-4">Recherche</h1>
    @endif

    <div id="search" class="my-4">

        <form method="post" action="{{route('recherche')}}" class="input-group mb-3 border rounded">
            @csrf
            @if($search??false)
            <input name="search" type="text" placeholder="Recherche" class="pl-1 pl-md-3 form-control border-0" aria-describedby="search" value="{{$search}}">
            @else 
            <input name="search" type="text" placeholder="Recherche" class="pl-1 pl-md-3 form-control border-0" aria-describedby="search">
            @endif
            <div class="input-group-append">
                <button class="btn px-1 px-md-2" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>

    </div>

    @if($search??false)
        <div class="row border-bottom mx-2 mb-2">
            <div class="col-10 text-left font-weight-bold">Intitulé</div>
            <div class="col-2 text-center font-weight-bold">Durée</div>
        </div>
        @foreach($formations as $formation)
            <div class="row mx-2">
                <div class="col-10"><a href="{{route('formation', ['formation' => $formation->id])}}">{{$formation->nom}}</a></div>
                <div class="col-2 text-center purple font-weight-bold">{{$formation->duree}}</div>
            </div>
        @endforeach
    @endif
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection