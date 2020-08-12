<div class="row mt-5 pt-5 pb-5" id="solution">
    <div class="col-12 text-center title pb-5">
        <span class="muli-bold w-100 d-inline-block">
            Notre solution
        </span>
        <span class="pretty w-100 d-inline-block">
            métiers
        </span>
    </div>
    <div class="col-md-6 col-12 bg-dark-grey square d-none d-md-block">
        <div class="w-100 text-right text-white muli-bold h3 mb-5">01</div>
        <div class="w-100 text-left text-white muli-bold h1 mt-5 pt-5 mb-0">Conseil</div>
        <div class="w-100 text-left blue muli text mb-5">{{$conseil->certification}}</div>
        <ul class="text-white text muli mt-5 w-50 mb-5 pb-5">
            <li>Nous proposons un programme d’accompagnement
                iso 9001 vers la <strong>certification {{$conseil->certification}}</strong>
            </li>
        </ul>
    </div>
    <div class="col-md-6 col-12 bg-blue square d-none d-md-block">
        <div class="w-100 text-right text-white muli-bold h3 mb-5">02</div>
        <div class="w-100 text-left text-white muli-bold h1 mt-5 pt-5 mb-0">Gains</div>
        <div class="w-100 text-left dark-grey muli text ">certification ISO</div>
        <ul class="text-white text muli mt-5 w-60 mb-5 pb-5">
            <li>
                Une expertise technique en <b>conseil {{$conseil->certification}}</b>
            </li>
            <li>
                Un accompagnement opérationnel 
            </li>
            <li>
                Les compétences nécessaires pour vous approprier la démarche
            </li>
        </ul>
    </div>

    <div class="owl-carousel owl-theme text-center d-block d-md-none col-12 px-0" data-loop="true" data-dots="true" data-nav="false" data-sm="1" data-md="1" data-autoplay="true" data-margin="0" data-padding="0">
        <div class="col-md-6 col-12 bg-dark-grey square d-block d-md-none">
            <div class="w-100 text-right text-white muli-bold h3 mb-3">01</div>
            <div class="w-100 text-left text-white muli-bold h1 mt-3 pt-3 mb-0">Conseil</div>
            <div class="w-100 text-left blue muli text mb-5">{{$conseil->certification}}</div>
            <ul class="text-white text-left text muli mt-5 w-80 mb-5 pb-4">
                <li class="">Nous proposons un programme d’accompagnement
                    {{$conseil->certification}} vers la <strong>certification {{$conseil->certification}}</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-6 col-12 bg-blue square d-block d-md-none">
            <div class="w-100 text-right text-white muli-bold h3 mb-3">02</div>
            <div class="w-100 text-left text-white muli-bold h1 mt-3 pt-3 mb-0">Gains</div>
            <div class="w-100 text-left dark-grey muli text ">certification ISO</div>
            <ul class="text-white text-left text muli mt-5 w-80 mb-1 pb-1">
                <li>
                    Une expertise technique en <b>conseil {{$conseil->certification}}</b>
                </li>
                <li>
                    Un accompagnement opérationnel 
                </li>
                <li>
                    Les compétences nécessaires pour vous approprier la démarche
                </li>
            </ul>
        </div>
    </div>
</div>