@extends('layouts.app')

@section('title', 'Cyn-formation')

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection


{{-- Content --}}
@section('content')
    {{$page->contenu}}
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection