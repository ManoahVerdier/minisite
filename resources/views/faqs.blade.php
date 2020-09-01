@extends('layouts.app')

@section('title', env('APP_NAME')." - FAQ")
@section('description', env('APP_NAME')." - FAQ")

@section('body-attr')
id="faqs-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.mobile')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container">
    <h1 class="w-100 text-center blue mb-4 mt-3">FAQ</h1>

    @foreach($faqs as $faq_categ)
        <div class="row mx-2">
            <div class="col-12"><a class="h2" href="{{route('faq_categ', ['slug' => $faq_categ->slug])}}">{{$faq_categ->titre}}</a></div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection