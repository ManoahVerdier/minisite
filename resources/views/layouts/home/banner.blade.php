<div class="container" id="banner">
    <div class="row" >
        <div class="col-12 px-0">
            <img width="100%" class="h-auto" src="{{  asset("storage/".App\Homepage::first()->img)  }}"/>
            <div class='position-absolute w-100 h-100 banner-text'>
                <div class='d-inline-block w-100 h-80 h-md-50'></div>
                <h2 class='text-white h1 font-weight-bolder muli-bold mb-0'>{{  App\Homepage::first()->titre_site  }}</h2>
                <h5 class='text-primary h4'>{{  App\Homepage::first()->soustitre_site  }}</h5>
            </div>
        </div>
    </div>
</div>