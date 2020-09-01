@extends('layouts.app')

@section('title', 'Audit interne qualité externalisé')
@section('description', 'Audit interne qualité externalisé')

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
        @include('layouts.audit.banner')
        @include('layouts.audit.description')
        @include('layouts.audit.avantages')
        @include('layouts.audit.temoignages')
        @include('layouts.audit.services_associes')
    </div>
</section>

@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection