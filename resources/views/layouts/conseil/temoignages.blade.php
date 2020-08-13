<?php //dd($conseil->temoignages()->get());?>
<div class="row py-4 d-none d-md-block" id="temoignages"> 
  <div class="col-12">
    <div class="title w-100 text-center dark-gray mt-5 pt-5 pr-5 mb-5">
      <span class="muli-bold dark-gray">Les témoignages<br></span>
      <span class="pretty dark-gray"> de nos clients </span>
    </div>
  </div>
  <div class="col-12 px-0 pb-4">
    <img src="{{asset('img/conseil/conseil_temoignages.jpg')}}" class="w-100"/>
  </div>
  <div class="col-6 offset-3">
    <div class="owl-carousel owl-theme text-center" data-loop="true" data-dots="true" data-nav="false" data-sm="1" data-md="1" data-autoplay="true" data-margin="30">
      @foreach($conseil->temoignages()->get() as $temoignage)
      <div class="temoignage text-center">
        <img src="{{asset('img/conseil/smiley.png')}}" width="150px" height="150px"/>
        <p class="muli-bold h4 mb-3">{{$temoignage->client}}</p>
        <h5 class="blue h6 muli-bold">{{$temoignage->certification}}</h5>
        <div class="testimonial_rating_holder mb-4">
          @for($i=0;$i < 5;$i++)
          <span class="testimonial_star_holder {{$i<$temoignage->nb_etoiles?'full':''}}">
            <span class="icon_star"></span>
          </span>
          @endfor
        </div>
        <div class="content grey muli mb-5 py-5 position-relative">
          {!!$temoignage->texte!!}
        </div>
      </div>
      @endforeach
      

    </div>
  </div>
</div>