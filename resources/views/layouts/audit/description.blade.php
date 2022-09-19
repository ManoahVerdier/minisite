<div class='row d-md-flex d-none' id="description">
    <div class="col-md-7 col-12 offset-md-2 mb-5">
        <h2 class="title">
            <span class='muli-bold'>
                Externalisez votre audit
            </span>
            <span class="pretty">
                interne qualité,
            </span>
        </h2>
    </div>
    <div class="col-md-7 col-12 offset-md-2">
        <div class="row">
            <div class="col-md-6 pr-5 gray text">
                @if($conseil->description!="")
                    {!!$conseil->description!!}
                @else 
                    les entreprises certifiées conformes à une norme ISO, 
                    ou en cours de certification, doivent effectuer des audits 
                    internes à intervalles réguliers. Les audits internes 
                    peuvent être menés par des salariés internes à l’entreprise.
                    Toutefois, ils peuvent également être «sous-traités» – 
                    à des consultants extérieurs. 
                    <br>
                    Toutes les normes ISO nécessitent des audits internes qualité, 
                    notamment:ISO 9001, ISO 14001, ISO 45001, ISO 9100, 
                    ISO 17025, ISO 17020, ISO 22000
                    <br>
                    Nos consultants peuvent aider votre entreprise à répondre à 
                    cette exigence d’amélioration continue en effectuant vos audits 
                    internes aux emplacements et aux dates requis par votre système 
                    de gestion, votre procédure d’audit interne qualité ou, en 
                    définitive, votre calendrier d’audit interne.
                @endif
            </div>
            <div class="col-md-6 text-right">
                <img src="{{asset('img/audit/certif.jpg')}}"/>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-12 offset-md-2 muli-extra-bold my-5" id="list">
        <div class="row ">
            <div class="col-md-1 number gray py-4 text-center">01</div>
            <div class="col-md-10 content border-top py-4">Demander un devis</div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row">
            <div class="col-md-1 number py-4 text-center">02</div>
            <div class="col-md-10 content border-top py-4">Planifier votre audit</div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row ">
            <div class="col-md-1 number py-4 text-center">03</div>
            <div class="col-md-10 content border-top border-bottom py-4">Nous auditons</div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
    </div>
</div>