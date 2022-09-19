@extends('layouts.app')

@section('title', "Certification ISO, cabinet de conseil QHSE partout en France")
@section('description', "Cabinet de conseil en Qualité, Hygiène, Sécurité et Environnement. Nous intervenons partout en France")

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