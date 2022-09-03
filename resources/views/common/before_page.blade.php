
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


<script>

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
