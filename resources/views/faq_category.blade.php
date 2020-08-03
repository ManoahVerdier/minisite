@extends('layouts.app')

@section('title', "Cyn-formation - FAQ")
@section('description', "Cyn-formation - FAQ")

@section('body-attr')
id="faqs-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container">
    <h1 class="w-100 text-center blue mb-4 mt-3">FAQ {{$faq_categ->titre}}</h1>
    @foreach($faq_categ->faqs()->get() as $faq)
        <div class="row mx-2">
            <div class="col-12"><a href="{{route('faq_slug', ['slug' => $faq->slug])}}">{{$faq->question}}</a></div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection