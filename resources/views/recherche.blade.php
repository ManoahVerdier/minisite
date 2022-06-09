@extends('layouts.app')

@section('title', env('APP_NAME').' - Recherche')

@section('body-attr')
id="search-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container my-5">

 
    <h1 class="w-100 text-center text-dark mb-4">Recherche</h1>

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
        <h5 class="mb-3 mt-5 ">Résultats de la recherche "{{$search}}"</h5>
        
        @foreach($pages as $page)
            <div class="row mx-2">
                <div class="col-12 font-weight-bold"><a href="{{route('page', ['slug' => $page->slug])}}">{{$page->title}}</a></div>
                <div class="col-12">{{$page->excerpt}}</div>
                
            </div>
        @endforeach
    @endif
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection