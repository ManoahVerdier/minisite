<div class="row bg-light-grey" id="objectif">
    <div class="col-md-4 offset-md-2 pr-5 px-5 px-md-1">
        <div class="title w-100 mt-5 pt-5 pr-5 mb-5">
            <span class="muli-bold">Votre objectif</span>
            <span class="pretty"> une <br>démarche qualité réussie,</span>
        </div>
        <div class='text mb-5 mb-md-0'>
            Vous souhaitez mener une démarche de <br>
            <h3 class="text mb-0">conseil {{$conseil->certification}}</h3>
            afin d’obtenir la <b>certification {{$conseil->certification}}</b> au meilleur prix.
        </div>
    </div>
    <div class="col-md-4 offset-md-2 px-0 px-md-1">
        <img class="w-100" src="{{asset('img/conseil/'.$conseil->slug.'-objectif.jpg')}}"/>
    </div>
</div>