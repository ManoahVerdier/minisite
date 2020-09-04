<div class='row d-md-flex d-none' id="description">
    <div class="col-md-7 col-12 offset-md-2 mb-5">
        <h2 class="title">
            <span class='muli-bold'>
                En envisageant la <br>certification 
            </span>
            <span class="pretty">
                {{$conseil->certification}},
            </span>
        </h2>
    </div>
    <div class="col-md-7 col-12 offset-md-2">
        <div class="row">
            <div class="col-md-6 pr-5 gray text">
                {!!$conseil->description!!}
            </div>
            <div class="col-md-6 text-right">
                <img src="{{asset('img/conseil/'.env('IMG_SLUG').'_conseil-certif.jpg')}}"/>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-12 offset-md-2 muli-extra-bold my-5" id="list">
        <div class="row ">
            <div class="col-md-1 number gray py-4 text-center">01</div>
            <div class="col-md-10 content border-top py-4">Vous êtes une TPE, une PME ?</div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row">
            <div class="col-md-1 number py-4 text-center">02</div>
            <div class="col-md-10 content border-top py-4">Vous avez un budget à respecter ?</div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row ">
            <div class="col-md-1 number py-4 text-center">03</div>
            <div class="col-md-10 content border-top border-bottom py-4">Vous partez de 0 ou avez déjà commencé à mettre en place la démarche ?</div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
    </div>
</div>