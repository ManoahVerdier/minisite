@extends('layouts.app')

@section('title', App\Homepage::first()->metatitle  )
@section('description', App\Homepage::first()->metadesc)

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection


{{-- Content --}}
@section('content')
    @include('layouts.home.banner')
    @include('layouts.home.carte')
    @include('layouts.home.page')
    
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection