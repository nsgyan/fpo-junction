// JavaScript Document
$(document).ready(function() {
    var owl = $("#owl-demo");

    owl.owlCarousel({
      rtl:false,
      stagePadding: 10,
   loop:true,
   margin:0,
   autowidth : true,
   autoplay:true,
   autoplayTimeout:3000,
   autoplayHoverPause:true,
   nav: false,
     dots: true,
   responsive:{
     0:{
       items:1
     },
     600:{
       items:3.4
     },
     1000:{
       items:4.4
     }
   }
     });
    
    
// Video Slider
var owl = $("#owl-demo-video");

owl.owlCarousel({
 rtl:false,
  // stagePadding: 50,
loop:true,
margin:30,
autowidth : true,
autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:true,
nav: false,
dots: false,
responsive:{
0:{
  items:1
},
600:{
  items:1
},
1000:{
  items:1
}
}
});


// Homepage Books Slider 1 with filter
      var owl = $("#owl-demo71");

      owl.owlCarousel({
       rtl:false,
        // stagePadding: 50,
    loop:true,
    margin:30,
    autowidth : true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: false,
      dots: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:3.9
      }
    }
      });
//Key message slider
$('#customers-testimonials').owlCarousel({
  loop: true,
  center: true,
  items: 3,
  margin: 0,
  autoplay: true,
  dots:false,
  autoplayTimeout: 8500,
  smartSpeed: 450,
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    1170: {
      items: 3
    }
  }
});
// Training Module Slider 
      var owl = $("#owl-demo711");

      owl.owlCarousel({
       rtl:false,
        // stagePadding: 50,
    loop:true,
    margin:30,
    autowidth : true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: false,
      dots: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:3.9
      }
    }
      });

// Homepage Books Slider 2 with filter
      var owl = $("#owl-demo72");

      owl.owlCarousel({
       rtl:false,
    loop:false,
    margin:10,
    autowidth : true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: false,
      dots: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
      });
    
// Homepage Books Slider 3 with filter
      var owl = $("#owl-demo73");

      owl.owlCarousel({
       rtl:false,
    loop:false,
    margin:10,
    autowidth : true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: false,
      dots: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
      });
    
    // Homepage Books Slider 3 with filter
      var owl = $("#owl-demo74");

      owl.owlCarousel({
       rtl:false,
    loop:false,
    margin:10,
    autowidth : true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: false,
      dots: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
      });
    
    
 
  $("#owl-demo11").owlCarousel({
 
    autoplay:true,
    margin:10,
      autoPlay: 100, //Set AutoPlay to 3 seconds
 
      items : 7,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
    
    
    // End Homepage Books Slider  with filter
    
// What's on Slider
      var owl = $("#owl-demo8");

      owl.owlCarousel({
       loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.whatsOnSlide .custom-nav',
      dots: false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
      });
// End what's on Slider  with filter
    
//Bottom Banner Slider
    $('.slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    var carousel = e.relatedTarget;
    $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }).owlCarousel({
    items: 1,
    loop:true,
    margin:0,
    nav:true,
    autoplay: true,
    animateIn: 'fadeout',
    animateOut: 'fadeOut'
    });
    
 //End bottom banner slider//Bottom Banner Slider
    $('.whatsOnSlide').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    var carousel = e.relatedTarget;
    // $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }).owlCarousel({
    items: 1,
    loop:true,
    margin:0,
    nav:true,
    autoplay: true,
    animateIn: 'fadeout',
    animateOut: 'fadeOut'
    });
    
 //End bottom banner slider


$(function() {
        $('.newstape').newstape();
    });
  
  
  
  $('#smallText').click(function(){
  curSize=parseInt($('#pagecontent').css('font-size'))-2;
  if(curSize<=20)
        $('#pagecontent').css('font-size', curSize);
        });
    $('#largeText').click(function(){
  curSize=parseInt($('#pagecontent').css('font-size'))+2;
  if(curSize<=20)
        $('#pagecontent').css('font-size', curSize);
        });
    $('#normalText').click(function(){
  curSize=parseInt($('#pagecontent').css('font-size')) -0;
  if(curSize=14)
        $('#pagecontent').css('font-size', curSize);
        });
    
    /*************************Theme color switcher**********************************/
    
    $('#coloryellow').click(switchGray);
$('#colororg').click(switchWhite);

function switchGray() {
  $('body').attr('class', 'gray');
}

function switchWhite() {
  $('body').attr('class', 'white');
}

/**************Dropdoen on hover*****************************/
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
});


/********************Back to Top***********************/
 $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 100);
            return false;
        });
    });
/***********/
$('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
        singleItem: true,
                margin: 10,
        autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true
              });