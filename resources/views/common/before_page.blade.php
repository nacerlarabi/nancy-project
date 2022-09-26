
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('css/templatemo-digital-trend.css') }}">



<!-- SCRIPTS -->

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>


<script type="text/javascript" src="{{ asset('js/rellax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

<!--<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>-->



<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://js.stripe.com/v3/"></script>
<script src="/checkout.js" defer></script>
<script src="/payment.js"></script>
<script src="/toastr.min.js"></script>

<script src="/js/lc_lightbox.lite.js" type="text/javascript"></script>
<script src="/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<script src="/js/jquery.ssd-confirm.js"></script>
<script src="https://md-aqil.github.io/images/swiper.min.js"></script>

<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: '2',
        // coverflowEffect: {
        //   rotate: 50,
        //   stretch: 0,
        //   depth: 100,
        //   modifier: 1,
        //   slideShadows : true,
        // },

        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 50,
            modifier: 6,
            slideShadows : false,
        },

    });


    var galleryTop = new Swiper('.swiper-container.testimonial', {
        speed: 400,
        spaceBetween: 50,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        direction: 'vertical',
        pagination: {
            clickable: true,
            el: '.swiper-pagination',
            type: 'bullets',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });

    lc_lightbox('.elem', {
        wrap_class: 'lcl_fade_oc',
        gallery : true,
        thumb_attr: 'data-lcl-thumb',

        skin: 'minimal',
        radius: 0,
        padding	: 0,
        border_w: 0,
    });

    $('[data-ssd-confirm-trigger]').ssdConfirm();

    $('.dropdown').hover(function(){
        console.log('test');
        $('.dropdown-toggle', this).trigger('click');
    });

    var isSelected = false;
    var $selectElement = $("<select>");
    $selectElement.append($('<option>', {value:"1", text:"test 1"}).attr("selected", false));
    $selectElement.append($('<option>', {value:"2", text:"test 2"}));
    console.log($("option", $selectElement).filter(':selected').text());


    console.log(isSelected);

    var filterednames = names.filter(function(obj) {
        return (obj.name === "Joe") && (obj.age < 30);
    });

</script>
