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
<section id="formation-detail">
    <div class="container">
        <div class="row">
            <div class='col-8'>
                <h1 class="text-center mt-1">
                    {{$formation->titre}}
                </h1>
                <h2 class="h4 mb-5">
                    {{$formation->sous_titre}}
                </h2>
                @include('layouts.formation.objectif')
                @include('layouts.formation.programme')
                @include('layouts.formation.infos')
                @include('layouts.formation.calendrier')
            </div>
            <div class='col-4 pl-1'>
                @include('layouts.formation.resume')
                @include('layouts.formation.sessions')
                @include('layouts.formation.avantages')
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection