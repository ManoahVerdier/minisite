@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.mobile')
@endsection


{{-- Content --}}
@section('content')
    @include('layouts.home.banner')
    @include('layouts.home.expertise')
    @include('layouts.home.clients')
    @include('layouts.home.carte')
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection