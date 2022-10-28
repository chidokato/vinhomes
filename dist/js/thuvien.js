$(document).ready(function(){
  $(".slider1").owlCarousel({
      items:5,
//      autoplay:false,
      margin:3,
      loop:true,
      dots:true
//      nav:true,
//      navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ]
  });
});

$(document).ready(function(){
  $(".slider2").owlCarousel({
      items:1,
//      autoplay:false,
      margin:0,
      loop:true,
      dots:true
//      nav:true,
//      navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ]
  });
});