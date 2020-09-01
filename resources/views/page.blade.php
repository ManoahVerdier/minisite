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
    <div class="container">
        <div class="row">
            <div class="col-12">
                {!!$page->contenu!!}
            </div>
        </div>
    </div>
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection