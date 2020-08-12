<div class="bg-light-grey container-fluid" id="expertise">
    {{--<div class="container">--}}
        <div class="row p-5">
            <div class="col-12 col-md-4" id="expertise-left">
                <div class='h1 blue w-100 mb-0 muli-bold'>L'expertise</div>
                <div class='h2  w-100  mb-0 pretty'>métiers</div>
                <div class='h1 blue w-100 font-weight-bold  mb-0'>-</div>
            </div>
            <div class="col-12 col-md-8 align-bottom align-self-end pb-3" id="expertise-right">
                <div class="h-100 align-bottom d-inline-block gray">
                    Où que vous soyez en France, quel que soit votre secteur d’activité, vous pouvez compter sur nos partenaires pour vous fournir des solutions adaptées pour vos projets de <b>certification ISO</b>.
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_aero.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0"><a href="{{route('categorie',array('slug'=>'communication'))}}" class="font-weight-bold dark-grey">AÉRONAUTIQUE</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_auto.webp')}}"/>
                <div class="w-100 text-upper expertise-categ"><a href="{{route('categorie',array('slug'=>'immobilier'))}}" class="font-weight-bold dark-grey">INSPECTION</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_environnement.webp')}}"/>
                <div class="w-100 text-upper expertise-categ"><a href="{{route('categorie',array('slug'=>'informatique'))}}" class="font-weight-bold dark-grey">ENVIRONNEMENT</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_labo.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0"><a href="{{route('categorie',array('slug'=>'qualite'))}}" class="font-weight-bold dark-grey">LABORATOIRE</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_sante.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0"><a href="{{route('categorie',array('slug'=>'marches_publics'))}}" class="font-weight-bold dark-grey">SÉCURITÉ</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2 d-md-none">
                <span class="w-100 d-inline-block my-3"><span class="border-bottom blue border-blue mr-3 muli">Tous nos secteurs d'activité</span></span>
                <span class="blue plus border border-blue d-inline-block float-right mr-3">+</span>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-12 col-md-4 offset-md-8 h4 my-4 pr-5">
                <div class="d-relative pr-5 text-right mr-5">
                    <span class="w-100 d-inline-block"><span class="border-bottom border-blue mr-3 blue muli-bold font-weight-bold h5">TOUS NOS SECTEURS D'ACTIVITÉ</span></span>
                    <span class="blue plus border border-blue d-inline-block position-absolute">+</span>
                </div>
            </div>
        </div>
    {{--</div>--}}
</div>