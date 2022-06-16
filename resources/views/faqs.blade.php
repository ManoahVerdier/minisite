@extends('layouts.app')

@section('title', env('APP_NAME')." - FAQ")
@section('description', env('APP_NAME')." - FAQ")

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

<div class="container" id="accordion">
    <h1 class="border-bottom border-primary mb-3 text-center">FAQ</h1>

    @foreach($faqs as $faq)
        <div class="row mx-2">
            <div class="col-12">
                <div id="accordion-{{ $faq->slug }}" class="accordion-wrap inactive">
                    <div class="card border-0 bg-white mb-2 px-3 py-2">
                        <div class="card-header bg-primary text-white border-0" id="accordion-header-{{ $faq->slug }}">
                        <h5 class="mb-0">
                            <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#{{ $faq->slug }}" aria-expanded="true" aria-controls="{{ $faq->slug }}">
                                {{ $faq->question }}
                            </button>
                            <i class="fa fa-plus faq_icon text-white"></i>
                            <i class="fa fa-minus faq_icon text-white"></i>
                        </h5>
                        </div>

                        <div id="{{ $faq->slug }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body bg-white">
                                {!!$faq->question!!}                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection
