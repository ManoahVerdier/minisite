@extends('layouts.app_lp')

@section('title', $page->title)
@section('description', $page->description)

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main_lp')
@endsection


{{-- Content --}}
@section('content')
    <div class="pt-21 pt-sm-24 pt-md-25 pt-lg-30 pb-lg-0 pb-md-9 pb-11 position-relative z-index-1 overflow-hidden">
        <div class="container position-relative">
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
            <div class="pos-abs-bl mb-28 ml-xl-n18 ml-lg-n10 ml-sm-n10 translate-n50 z-index-n1">
                <img src="/test/image/l2/svg/hero-shape-1.svg" alt="" class="animate-1">
              </div>
            <!-- shape-1 end -->
            <!-- shape-2 start -->
            <div class="pos-abs-br mb-lg-5 mr-lg-n18 z-index-n1">
            <img src="/test/image/l2/png/hero-shape-2.png" alt="" class="animate-1">
            </div>
            <!-- shape-2 end -->
        </div>
    </div>
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main_lp')
@endsection