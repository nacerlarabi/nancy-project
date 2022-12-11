@extends('layouts.main')

@section('content')

<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center customized-cover">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="hero-text">

                    <h1 class="text-white" data-aos="fade-up" style="text-shadow: 2px 2px 2px black;">{!! $content["home|title"] !!}</h1>
                    <p class="text-white mt-3" data-aos="fade-up" data-aos-delay="100" style="text-shadow: 2px 2px 2px black;">{!! $content["home|init1"] !!}</p>
                    <p class="text-white mt-3" data-aos="fade-up" data-aos-delay="100" style="text-shadow: 2px 2px 2px black;">{!! $content["home|init2"] !!}</p>
                    <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"></strong>
                </div>
            </div>

      {{--       <div class="col-lg-6 col-12 d-flex align-items-end flex-column">
                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                    @include('layouts.image_mosaic')
                </div>
            </div> --}}
        </div>
    </div>
</section>


<!-- ABOUT -->
<section class="about section-padding pb-0" id="about">
    <div class="container">

        <div class="row">
            <div class="card-deck" data-aos="fade-up" data-aos-delay="100">
                @foreach($cards as $card)
                @include('layouts.card', ['card'])
                @endforeach
            </div>
            <div class="col-lg-7 mx-auto col-md-10 col-12">
                <div class="about-info"></div>

                <div class="about-image" data-aos="fade-up" data-aos-delay="400">

                    <img src="{{ asset('images/logo/logo-transparent.png') }}" class="img-fluid" alt="office" width="200">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- PROJECT -->
<section class="project section-padding" id="project">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12" >

                <h2 class="mb-5 text-center" data-aos="fade-up" >
                    Ils témoignent ...
                    <strong>L'expérience unique </strong>
                </h2>
            </div>
        </div>
    </div>
</section>

@include('layouts.testemonies')
<!-- TESTIMONIAL -->
<section class="testimonial section-padding" style="background-color: #f0f8ff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <div class="contact-image text-center" data-aos="fade-up">
                    <img src="{{ asset("images/directeur.png") }}" class="img-fluid" alt="website">
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">{{ $content['home|titleDirectorWord'] }}</h4>
                <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>
                <h6 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{ $content['home|directorWord1'] }}</h6>
                <h6 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{ $content['home|directorWord2'] }}</h6>
                <h6 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{ $content['home|directorWord3'] }}</h6>
                <p data-aos="fade-up" data-aos-delay="400">
                    <strong>{{ $content['home|titleDirectorName'] }}</strong>

                    <span class="mx-1">/</span>

                    <small>{{ $content['home|titleDirectorPosition'] }}</small>
                </p>
            </div>
        </div>
    </div>
</section>
</section>


@endsection