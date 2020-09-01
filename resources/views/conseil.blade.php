@extends('layouts.app')

@section('title', $conseil->certification)
@section('description', $conseil->certification.' - '.$conseil->certification)

@section('body-attr')
id="form-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')   
    @include('layouts.partials.header.mobile')
@endsection

{{-- Content --}}
@section('content')
<section id="conseil-detail">
    <div class="container-fluid">
        @include('layouts.conseil.banner')
        @include('layouts.conseil.description')
        @include('layouts.conseil.objectifs')
        @include('layouts.conseil.solution')
        @include('layouts.conseil.avantages')
        @include('layouts.conseil.services')
        @include('layouts.conseil.temoignages')
        @include('layouts.conseil.services_associes')
    </div>
</section>

@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection