<div class="container-fluid mb-5" id="banner" style="min-height: 42.64706vw;">
    <div class="row" >
        <div class="col-12 col-md-6 px-0" id="banner-left">
            <img width="100%" class="h-auto" src="{{asset('/img/home/'.env('IMG_SLUG').'_HP_haut_01.webp')}}"/>
            <div class='position-absolute w-100 h-100 banner-text'>
                <div class='d-inline-block w-100 h-40 h-md-50'></div>
                <h2 class='text-white h1 font-weight-bolder muli-bold mb-0'>Audit / Conseil</h2>
                <h5 class='blue h4'>certifications {{$hp->slide}}</h5>
                <div class='position-absolute banner-bullet text-white'><span class='bullet'>--</span><span class="bullet-content muli">experts qualité</span></div>
            </div>
        </div>
        <div class="col-12 col-md-6 px-0" id="banner-right">
            <img width="100%" class=" h-auto" src="{{asset('/img/home/'.env('IMG_SLUG').'_HP_haut_02.webp')}}"/>
            <div class='position-absolute w-100 h-100 banner-text'>
                <div class='d-inline-block w-100 h-40 h-md-50'></div>
                <h2 class='text-white h1 font-weight-bolder muli-bold mb-0'>Formations</h2>
                <h5 class='blue h4'>normes {{$hp->slide}}</h5>
                <div class='position-absolute banner-bullet text-white'><span class='bullet'>--</span><span class="bullet-content muli"> experts consultants</span></div>
            </div>
        </div>
    </div>
</div>