@extends('layouts.app')

@section('title', env('APP_NAME')." - Documentation")
@section('description', env('APP_NAME')." - Documentation")

@section('body-attr')
id="docs-page"
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
    <h1 class="w-100 text-center blue mb-4 mt-3">Documentation</h1>

    @foreach($pages as $page)
        <div class="row mx-2">
            <div class="col-12"><a class="h4 mb-2" href="{{route('page', ['slug' => $page->slug])}}">{{$page->titre}}</a></div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection