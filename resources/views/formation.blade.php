@extends('layouts.app')

@section('title', $formation->titre)
@section('description', $formation->titre.' - '.$formation->sous_titre)

@section('body-attr')
id="form-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.breadcrumbs')
@endsection


{{-- Content --}}
@section('content')
<section id="formation-detail">
    <div class="container">
        <div class="row">
            <div class='col-12 col-md-9'>
                <div id="title" class="p-2 mb-4">
                    <h1 class="text-left h4 mt-1 blue">
                        {{$formation->titre}}
                    </h1>
                    <h2 class="h5">
                        {{$formation->sous_titre}}
                    </h2>
                </div>
                <div class='d-md-none'>
                    @include('layouts.formation.resume')
                    @include('layouts.formation.sessions')
                </div>
                @include('layouts.formation.objectif')
                @include('layouts.formation.programme')
                @include('layouts.formation.infos')
                @include('layouts.formation.calendrier')
            </div>
            <div class='d-none d-md-block col-12 col-md-3 pl-1 mt-4 mt-md-0 ml-1 ml-md-0'>
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