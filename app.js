
$(window).ready(function(){
   $('#myCarousel').carousel({
    pause: 'none'
  });
});
$(window).scroll(function(){
  if($(document).scrollTop()>50){
  $('nav').removeClass('navbar');
  $('nav').addClass('shrink');


  }
  else{
  $('nav').removeClass('shrink');
  $('.navbar-logo').addClass('navbar-logo');
  $('nav').addClass('navbar');

  }
  });


 $window.scrill(function(){
  if($(document).scrollTop()>50){
  $('nav').addClass('shrink');
  }
  else{
  $('nav').removeClass('shrink');
  }
  });


