<div class='row d-none d-md-flex' id="avantages">
    <div class="col-md-3 col-12 offset-md-2 mb-5 pr-5">
        <h2 class="title pr-5">
            <span class='muli-bold'>
                Nos avantages <br>sur 
            </span>
            <span class="pretty">
                le conseil {{$conseil->certification}},
            </span>
        </h2>
    </div>
    <div class="col-md-6 offset-md-1 col-12 ">
        <div class="row">
            <div class="col-md-6 pr-5 gray text pretty">
                
            </div>

        </div>
    </div>
    <div class="col-md-7 col-12 offset-md-2 muli-extra-bold my-5" id="list">
        <div class="row ">
            <div class="col-md-1 number gray py-4 text-center">01</div>
            <div class="col-md-10 content border-top py-4 px-0">
                @if($conseil->avantage1!="")
                    {{$conseil->avantage1}}
                @else
                    D’un accompagnement personnalisé pour atteindre votre objectif de certification
                @endif
            </div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row">
            <div class="col-md-1 number py-4 text-center">02</div>
            <div class="col-md-10 content border-top py-4 px-0">
                @if($conseil->avantage2!="")
                    {{$conseil->avantage2}}
                @else
                    De la formation et d’échange de bonnes pratiques en conseil {{$conseil->certification}}
                @endif
            </div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row ">
            <div class="col-md-1 number py-4 text-center">03</div>
            <div class="col-md-10 content border-top py-4 px-0">
                @if($conseil->avantage3!="")
                    {{$conseil->avantage3}}
                @else
                    D’outils pratiques pour la mise en œuvre du système de management de la qualité
                @endif
            </div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row ">
            <div class="col-md-1 number py-4 text-center">04</div>
            <div class="col-md-10 content border-top py-4 px-0">
                @if($conseil->avantage4!="")
                    {{$conseil->avantage4}}
                @else
                    D’un suivi tout au long de votre démarche et après l’obtention de la certification {{$conseil->certification}}
                @endif
            </div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
        <div class="row ">
            <div class="col-md-1 number py-4 text-center">05</div>
            <div class="col-md-10 content border-top border-bottom py-4 px-0">
                @if($conseil->avantage5!="")
                    {{$conseil->avantage5}}
                @else
                    Vous pourrez échanger avec d’autres entreprises qui ont les mêmes problématiques que vous
                @endif
            </div>
            <div class="col-md-1 icon py-4 text-center">✓</div>
        </div>
    </div>
</div>