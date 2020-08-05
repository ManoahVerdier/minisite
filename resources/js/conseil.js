import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

console.log('test');
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop: $('.owl-carousel').data('loop') === false ? false : true,
    margin: $('.owl-carousel').data('margin') ? $('.owl-carousel').data('margin') : 10,
    center: $('.owl-carousel').data('center') === true ? true : false,
    autoplay: $('.owl-carousel').data('autoplay') === true ? true : false,
    autoplayTimeout: $('.owl-carousel').data('autoplay-timeout') ? $('.owl-carousel').data('autoplay-timeout') : 5000,
    autoplayHoverPause: $('.owl-carousel').data('autoplay-hover-pause') === false ? false : true,
    dots: $('.owl-carousel').data('dots') === false ? false : true,
    nav:$('.owl-carousel').data('nav') === false ? false : true,
    stagePadding:$('.owl-carousel').data('padding') ? $('.owl-carousel').data('padding') : 0,
    responsive:{
        0:{
            items: $('.owl-carousel').data('xs') ? $('.owl-carousel').data('xs') : 1,
            autoHeight:true,
            center:false,
        },
        600:{
            items: $('.owl-carousel').data('sm') ? $('.owl-carousel').data('sm') : 3,
            autoHeight:false,
            center:true,
        },
        1000:{
            items: $('.owl-carousel').data('md') ? $('.owl-carousel').data('md') : 5,
            autoHeight:false,
            center:true,
        }
    }
  });
});