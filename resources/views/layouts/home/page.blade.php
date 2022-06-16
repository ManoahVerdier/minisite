<div class="container mb-5 muli" id="page-accueil">
        <div class="row p-3 pl-md-5 pr-md-1 pt-5 justify-content-center h-100">
            <h1 class="mb-5">{{  App\Homepage::first()->title  }}</h1>
            {!! App\Homepage::first()->contenu  !!}
        </div>
</div>