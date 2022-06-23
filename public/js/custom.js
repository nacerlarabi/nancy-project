
  $(function () {
      var registrationData = {"_token": "{{ csrf_token() }}" };


      $('#modal1-button').click(function (){

          registrationData["gender"] = $('input[name=gender]').val();
          registrationData["status"] = $('input[name=status]').val();
          registrationData["first_name"] = $('input[name=first_name]').val();
          registrationData["last_name"] = $('input[name=last_name]').val();
          registrationData["birthdate"] = $('input[name=birthdate]').val();
          registrationData["nationality"] = $('input[name=nationality]').val();

      });

      $('#modal2-button').click(function (){

          registrationData["address"] = $('input[name=address]').val();
          registrationData["zipcode"] = $('input[name=zipcode]').val();
          registrationData["city"] = $('input[name=city]').val();
          registrationData["country"] = $('input[name=country]').val();
          registrationData["phone"] = $('input[name=phone]').val();
          registrationData["email"] = $('input[name=email]').val();

      });


      $('#modal3-button').click(function (){

          registrationData["courses_choice"] = $('input[name=courses-choice]').val();

      });

      $('#modal4-button').click(function (){

          registrationData["level"] = $('input[name=level]').val();
          registrationData["level_certificate"] = $('input[name=level-certificate]').val();

      });

      $('#modal5-button').click(function (){

          registrationData["staying_type"] = $('input[name=staying-type]').val();
          registrationData["hire_about_us"] = $('input[name=hire-about-us]').val();
          saveData(registrationData);

      });



      function saveData(registrationData){

          $.ajax({
              type: "POST",
              url: "/registration/store",
              data: registrationData,
              success: function(){

                  $('#success_message').css('visibility', 'visible');

                  $('#success_message').fadeIn();

              },
          });

      }
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
      items: 5,
      loop: true,
      // center: true,
      autoplayHoverPause: true,
      autoplay: false,
      nav: true,
      dots: false,
      margin: 30,
      responsiveClass:true,
      responsive: 
      {
          0:{
              items:1,
          },
          462:{
              items:1,
          },
          768:{
              items:2,
          },
          1100:{
              items:3,
          },
          1440:{
              items:4,
          }
      }
    });
  });

const navbar = document.querySelector('.navbar');
const menu = [...document.querySelectorAll('.navbar-nav .nav-item')];

window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;

  // Animation menu on scroll top
  if (scrollY >= 100) {
    navbar.classList.add('wrap');
  } else {
    navbar.classList.remove('wrap');
  }
})

if (window.scrollY >= 100) {
  navbar.classList.add('wrap');
}


    

