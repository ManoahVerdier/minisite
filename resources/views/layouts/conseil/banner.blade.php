<div class="row" id="banner">
    <div class="col-12 col-md-2 pl-5 bg-light-grey pt-5 pt-md-1">
        <div class='row h-100  pt-5 pt-md-1 pb-5 pb-md-1'>
            <div class="col-12 align-self-center">
                <div class='h1 blue w-100 mb-0 muli-bold'>Conseil</div>
                <div class='h2  w-100  mb-0 muli-bold dark-gray'>{{$conseil->certification}}</div>
                <div class='h1 blue w-100 font-weight-bold  mb-0 d-none d-md-block'>-</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7 bg-blue ">
        <div class='row h-100'>
            <div class="col-10 col-md-6 offset-1 offset-md-3 align-self-center h5 py-5 py-md-1">
                <span class="w-100 d-inline-block">Nos consultants </span>
                <span class="text-white">
                    <b>vous accompagnent à la mise en place<br>
                    de la certification ISO 9001 au sein</b>
                </span>
                <span class="w-100 d-inline-block">de votre entreprise.</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3 d-none d-md-flex">
        <div class="wrap" id="resume">
            <div class="row content">
                <div class="col-12 text-right line">
                    <span class="font-weight-bold blue float-left">Durée</span>entre 6 et 12 jours
                </div>
                <div class="col-12 text-right line">
                    <span class="font-weight-bold blue float-left">Tarif</span>à partir de 500€ HT / jour
                </div>
                <div class="col-12 text-right line">
                    <span class="font-weight-bold blue float-left">Type</span>à distance ou présentiel
                </div>
                <div class="col-12 text-left py-2">
                    <span class='blue font-weight-bold'> Prochaines sessions à distance</span>
                </div>
                <div class="col-12 text-center p-3">
                    <a href="{{route('contact', ['id' => $conseil->id])}}" class="btn btn-blue">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</div>