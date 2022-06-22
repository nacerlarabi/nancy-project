
  $(function () {

    // MENU
    $('.nav-link').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });


    // AOS ANIMATION
    AOS.init({
      disable: 'mobile',
      duration: 800,
      anchorPlacement: 'center-bottom'
    });


    // SMOOTH SCROLL
    $(function() {
      $('.nav-link').on('click', function(event) {
        var $anchor = $(this).attr('href');
       
        if (! $anchor || $anchor.substring(0, 1) !== "#") {
          return false;
        }

        $('html, body').stop().animate({
          scrollTop: $($anchor).offset().top - 0
        }, 1000);
          event.preventDefault();
      });
    });  


    // PROJECT SLIDE
    $('#project-slide').owlCarousel({
      items: 4,
      loop: true,
      center: true,
      autoplayHoverPause: false,
      autoplay: true,
      margin: 30,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          462:{
              items:2,
          },
          768:{
              items:3,
          },
          1110:{
              items:4,
          },
          1440:{
              items:4,
          }
      }
    });

  });


    

