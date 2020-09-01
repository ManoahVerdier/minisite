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
    @include('layouts.partials.header.faq_breadcrumbs')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container">
    <h1 class="w-100 text-center blue mb-4 mt-3">FAQ {{$faq_categ->titre}}</h1>
    @foreach($faq_categ->faqs()->get() as $faq)
        <div class="row mx-2">
            <div class="col-12"><a class="h2 " href="{{route('faq_slug', ['slug' => $faq->slug])}}">{!!$faq->question!!}</a></div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection