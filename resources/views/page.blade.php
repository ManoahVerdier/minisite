@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection


{{-- Content --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid" src="{!!asset("storage/".$page->img)!!}">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <h1 class="text-center my-3">{!!$page->title!!}</h1>
            </div>
            <div class="col-12">
                {!!$page->contenu!!}
            </div>
            <div class="col-12">
                <div id="accordion">
                    <div class="card bg-dark">
                        <div class="card-header" id="accordion">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Pour en savoir plus
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body bg-light">
                                {!!$page->accordion_text!!}                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection