@extends('layouts.app')

@section('title', $faq->question)
@section('description', $faq->description)

@section('body-attr')
id="faq-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.mobile')
@endsection


{{-- Content --}}
@section('content')
<section id="faq-detail">
    <div class="container">
        <div class="row">
            <div class='col-12 col-md-9'>
                <div id="title" class="p-2 mb-4">
                    <h1 class="text-left h4 mt-4 blue">
                        {!!$faq->question!!}
                    </h1>
                </div>
                <div class="content">
                    {!!$faq->reponse!!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection