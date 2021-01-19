<div class="bg-light-grey container-fluid muli" id="expertise">
    {{--<div class="container">--}}
        <div class="row p-5">
            <div class="col-12 col-md-4" id="expertise-left">
                <div class='h1 blue w-100 mb-0 muli-bold'>L'expertise</div>
                <div class='h2  w-100  mb-0 pretty'>métiers</div>
                <div class='h1 blue w-100 font-weight-bold  mb-0'>-</div>
            </div>
            <div class="col-12 col-md-8 align-bottom align-self-end pb-3" id="expertise-right">
                <div class="h-100 align-bottom d-inline-block gray">
                    {{$hp->expertise}}
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3 lazyload" data-src="{{asset('img/home/'.env('IMG_SLUG').'_HP_aero.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0">
                    @if($hp->img1_link ?? false)
                    <a href="{{$hp->img1_link}}" class="font-weight-bold dark-grey">
                        {{$hp->img1}}
                    </a>
                    @else 
                    <div class="font-weight-bold dark-grey">
                        {{$hp->img1}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3 lazyload" data-src="{{asset('img/home/'.env('IMG_SLUG').'_HP_auto.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0">
                    @if($hp->img2_link ?? false)
                    <a href="{{$hp->img2_link}}" class="font-weight-bold dark-grey">
                        {{$hp->img2}}
                    </a>
                    @else 
                    <div class="font-weight-bold dark-grey">
                        {{$hp->img2}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3 lazyload" data-src="{{asset('img/home/'.env('IMG_SLUG').'_HP_environnement.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0">
                    @if($hp->img3_link ?? false)
                    <a href="{{$hp->img3_link}}" class="font-weight-bold dark-grey">
                        {{$hp->img3}}
                    </a>
                    @else 
                    <div class="font-weight-bold dark-grey">
                        {{$hp->img3}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3 lazyload" data-src="{{asset('img/home/'.env('IMG_SLUG').'_HP_labo.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0">
                    @if($hp->img4_link ?? false)
                    <a href="{{$hp->img4_link}}" class="font-weight-bold dark-grey">
                        {{$hp->img4}}
                    </a>
                    @else 
                    <div class="font-weight-bold dark-grey">
                        {{$hp->img4}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3 lazyload" data-src="{{asset('img/home/'.env('IMG_SLUG').'_HP_sante.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0">
                    @if($hp->img5_link ?? false)
                    <a href="{{$hp->img5_link}}" class="font-weight-bold dark-grey">
                        {{$hp->img5}}
                    </a>
                    @else 
                    <div class="font-weight-bold dark-grey">
                        {{$hp->img5}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-6 col-md px-1 px-md-2 d-md-none">
                <span class="w-100 d-inline-block my-3"><span class="border-bottom blue border-blue mr-3 muli">Tous nos secteurs d'activité</span></span>
                <span class="blue plus border border-blue d-inline-block float-right mr-3">+</span>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-12 col-md-4 offset-md-8 h4 my-4 pr-5">
                <div class="d-relative pr-5 text-right mr-5">
                    @if($hp->has_secteurs ?? false)
                    <span class="w-100 d-inline-block"><span class="border-bottom border-blue mr-3 blue muli-bold font-weight-bold h5">TOUS NOS SECTEURS D'ACTIVITÉ</span></span>
                    <span class="blue plus border border-blue d-inline-block position-absolute">+</span>
                    @endif
                </div>
            </div>
        </div>
    {{--</div>--}}
</div>