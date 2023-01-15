@extends('layouts.main')

@section('content')
    <!-- section programme  -->

    <!-- section déroulement des cours -->

    <div class="fh5co-features-2-content" id="fle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-center " data-aos="fade-up" data-aos-delay="150">
                    <h1 class="fh5co-lead to-animate fadeIn animated"  data-content="cours|title1"><strong>{!! $content['cours|title1'] !!}</strong></h1>
                    <hr/>
                </div>
                <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-justify " data-aos="fade-up" data-aos-delay="200">
                    <p class="fh5co-sub to-animate fadeIn animated" data-content="cours|p1">{!! $content['cours|p1'] !!}</p>
                    <p class="fh5co-sub to-animate fadeIn animated" data-content="cours|p2">{!! $content['cours|p2'] !!}</p>
                    <p class="fh5co-sub to-animate fadeIn animated" data-content="cours|p3">{!! $content['cours|p3'] !!}</p>
                    <p class="fh5co-sub to-animate fadeIn animated" data-content="cours|p4">{!! $content['cours|p4'] !!}</p>
                </div>
            </div>
            <hr/>
            <div class="morning" style="background-color: #343a40; width:130%; margin-n,-left:-160px;">
            <div class="row" >
                <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-justify " data-aos="fade-up" data-aos-delay="100">
                    <h3 class="fh5co-lead to-animate fadeIn animated"  data-content="cours|title2"><strong>{!! $content['cours|title2'] !!}</strong></h3>
                    <p class="fh5co-sub to-animate fadeIn animated" data-content="cours|p5">{!! $content['cours|p5'] !!}</p>
                    <p class="fh5co-sub to-animate fadeIn animated" data-content="cours|p6">{!! $content['cours|p6'] !!}</p>
                </div>
            </div>

            <hr/>

            <div class="row" style="padding-top: 10px;" data-aos="fade-up" data-aos-delay="200">

                <div class="col-md-4 fh5co-text-wrap">
                    <div class="row text-center">
                        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-3 fadeInRight animated">
                            <div id="accordion-1" class="accordion accordion-spaced">
                                <div class="card">
                                    <div class="card-header py-4 collapsed" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                        <h5 class="mb-0">{!! $content['cours|title_p7'] !!}</h5>
                                    </div>
                                    <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1" style="">
                                        <div class="card-body">
                                            <p data-content="cours|p7">{!! $content['cours|p7'] !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4 fadeInRight animated">
                            <div id="accordion-2" class="accordion accordion-spaced">
                                <div class="card">
                                    <div class="card-header py-4 collapsed" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                        <h5 class="mb-0">{!! $content['cours|title_p8'] !!}</h5>
                                    </div>
                                    <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2" style="">
                                        <div class="card-body">
                                            <p data-content="cours|p8">{!! $content['cours|p8'] !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <div class="col-md-4 col-md-push-3 fh5co-text-wrap">
                            <div class="row text-center">
                                <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4 fadeInRight animated">
                                    <div id="accordion-3" class="accordion accordion-spaced">
                                        <div class="card">
                                            <div class="card-header py-4 collapsed" id="heading-3-3" data-toggle="collapse" role="button" data-target="#collapse-3-3" aria-expanded="false" aria-controls="collapse-3-3">
                                                <h5 class="mb-0">{!! $content['cours|title_p9'] !!}</h5>
                                            </div>
                                            <div id="collapse-3-3" class="collapse" aria-labelledby="heading-3-3" data-parent="#accordion-3" style="">
                                                <div class="card-body">
                                                    <p data-content="cours|p9">{!! $content['cours|p9'] !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4 fadeInRight animated">
                                    <div id="accordion-4" class="accordion accordion-spaced">
                                        <div class="card">
                                            <div class="card-header py-4 collapsed" id="heading-4-4" data-toggle="collapse" role="button" data-target="#collapse-4-4" aria-expanded="false" aria-controls="collapse-4-4">
                                                <h5 class="mb-0">{!! $content['cours|title_p9_bis'] !!}</h5>
                                            </div>
                                            <div id="collapse-4-4" class="collapse" aria-labelledby="heading-4-4" data-parent="#accordion-4" style="">
                                                <div class="card-body">
                                                    <p data-content="cours|p9">{!! $content['cours|p9_bis'] !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                <div class="col-md-4 col-md-push-3 fh5co-text-wrap">
                    <div class="row text-center">
                <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4 fadeInRight animated">
                    <div id="accordion-5" class="accordion accordion-spaced">
                        <div class="card">
                            <div class="card-header py-4 collapsed" id="heading-4-4" data-toggle="collapse" role="button" data-target="#collapse-5-5" aria-expanded="false" aria-controls="collapse-5-5">
                                <h5 class="mb-0">{!! $content['cours|title_p10'] !!}</h5>
                            </div>
                            <div id="collapse-5-5" class="collapse" aria-labelledby="heading-5-5" data-parent="#accordion-5" style="">
                                <div class="card-body">
                                    <p data-content="cours|p9">{!! $content['cours|p10'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-justify " data-aos="fade-up" data-aos-delay="100">
                    <h2 class="fh5co-lead to-animate fadeIn animated"  data-content="cours|title3"><strong>{!! $content['cours|title3'] !!}</strong></h2>
                    <h4 data-aos="fade-up" data-aos-delay="120" data-content="cours|p11">{!! $content['cours|p11'] !!}</h4>
                    <p class="lead" data-aos="fade-up" data-aos-delay="200" data-content="cours|p12">{!! $content['cours|p12'] !!}</p>
                    <p class="lead" data-aos="fade-up" data-aos-delay="200" data-content="cours|p15">{!! $content['cours|p15'] !!}</p>
                </div>
            </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-justify " data-aos="fade-up" data-aos-delay="100">
                    <h4 data-aos="fade-up" data-aos-delay="120" data-content="cours|title4">{!! $content['cours|title4'] !!}</h4>
                    <h6 class="" data-aos="fade-up" data-aos-delay="200"  data-content="cours|p18"><strong>{!! $content['cours|p18'] !!}</strong> </h6>
                    <h6 class="" data-aos="fade-up" data-aos-delay="200"  data-content="cours|p19"><strong>{!! $content['cours|p19'] !!}</strong>  </h6>
                    <p data-content="cours|p20">{!! $content['cours|p20'] !!}</p>
                </div>
            </div>
        </div>
    </div>

    <section class="fh5co-features-2-content" id="seminaire-pedagogique" >

        <article class="jumbotron">
            <div class="containerText">
                <h1 class="fh5co-lead to-animate fadein animated text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="10"  data-content="teaching_seminar|title1"><strong>{!! $content['teaching_seminar|title1'] !!}</strong></h1>
                <h3 class="fh5co-lead to-animate fadein animated text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="10"  data-content="teaching_seminar|title2"><strong>{!! $content['teaching_seminar|title2'] !!}</strong></h3>
                <h4 data-aos="fade-up" data-aos-delay="120" data-content="teaching_seminar|sous_title1">{!! $content['teaching_seminar|sous_title1'] !!}</h4>
                <p class="lead" data-aos="fade-up" data-aos-delay="150">
                <ul>
                    <li data-content="teaching_seminar|list_1_1">{!! $content['teaching_seminar|list_1_1'] !!}</li>
                    <li data-content="teaching_seminar|list_1_2">{!! $content['teaching_seminar|list_1_2'] !!}</li>
                    <li data-content="teaching_seminar|list_1_3">{!! $content['teaching_seminar|list_1_3'] !!}</li>
                    <li data-content="teaching_seminar|list_1_4">{!! $content['teaching_seminar|list_1_4'] !!}</li>

                    <li data-content="teaching_seminar|list_1_5">{!! $content['teaching_seminar|list_1_5'] !!}</li>
                    <li data-content="teaching_seminar|list_1_6">{!! $content['teaching_seminar|list_1_6'] !!}</li>
                    <li data-content="teaching_seminar|list_1_7">{!! $content['teaching_seminar|list_1_7'] !!}</li>
                    <li data-content="teaching_seminar|list_1_8">{!! $content['teaching_seminar|list_1_8'] !!}</li>
                    <li data-content="teaching_seminar|list_1_9">{!! $content['teaching_seminar|list_1_9'] !!}</li>
                </ul>
                </p>
                <h4 data-aos="fade-up" data-aos-delay="180" data-content="teaching_seminar|sous_title2">{!! $content['teaching_seminar|sous_title2'] !!}</h4>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">
                <ul>
                    <li data-content="teaching_seminar|list_2_1">{!! $content['teaching_seminar|list_2_1'] !!}</li>
                    <li data-content="teaching_seminar|list_2_2">{!! $content['teaching_seminar|list_2_2'] !!}</li>
                    <li data-content="teaching_seminar|list_2_3">{!! $content['teaching_seminar|list_2_3'] !!}</li>
                    <li data-content="teaching_seminar|list_2_4">{!! $content['teaching_seminar|list_2_4'] !!}</li>

                    <li data-content="teaching_seminar|list_2_5">{!! $content['teaching_seminar|list_2_5'] !!}</li>
                    <li data-content="teaching_seminar|list_2_6">{!! $content['teaching_seminar|list_2_6'] !!}</li>
                </ul>
                </p>
            </div>
        </article>
    </section>
    <div class="fh5co-features-2-content" id="theatre" >
        <!-- section Atelier theatre -->
        <section class="slice slice-lg" data-aos="fade-up" data-aos-delay="100">
            <h1 class="fh5co-lead to-animate fadeIn animated text-center"  data-content="theatre|title1"><strong>{!! $content['theatre|title1'] !!}</strong></h1>
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-lg-12 ml-lg-auto">
                        <p class="lead mt-4" data-content="theatre|p1">{!!  $content['theatre|p1'] !!}</p>
                        <p class="lead mt-4" data-content="theatre|p2">{!!  $content['theatre|p2'] !!}</p>
                        <hr/>
                    </div>
                    <div class="row row-grid align-items-center">
                        <div class=" ml-lg-auto col-lg-6">
                            <img alt="Image placeholder" src="{{ asset('images/theatre.jpeg') }}" style="width: 500px; height: 400px;">
                        </div>
                        <div class=" ml-lg-auto col-lg-6">
                            <p class="lead mt-4" data-content="theatre|p3">{!!  $content['theatre|p3'] !!}</p>
                            <p class="lead mt-4">
                            <ul>
                                <li data-content="theatre|p3_li_1">{!! $content['theatre|p3_li_1'] !!}</li>
                                <li data-content="theatre|p3_li_2">{!! $content['theatre|p3_li_2'] !!}</li>
                                <li data-content="theatre|p3_li_3">{!! $content['theatre|p3_li_3'] !!}</li>
                            </ul>
                            </p>

                            <p class="lead mt-4" data-content="theatre|p4">{!!  $content['theatre|p4'] !!}</p>
                            <p class="lead mt-4">
                            <ul>
                                <li data-content="theatre|p4_li_1">{!! $content['theatre|p4_li_1'] !!}</li>
                                <li data-content="theatre|p4_li_2">{!! $content['theatre|p4_li_2'] !!}</li>
                                <li data-content="theatre|p4_li_3">{!! $content['theatre|p4_li_3'] !!}</li>
                                <li data-content="theatre|p4_li_4">{!! $content['theatre|p4_li_4'] !!}</li>
                                <li data-content="theatre|p4_li_5">{!! $content['theatre|p4_li_5'] !!}</li>

                            </ul>
                            </p>
                            <p class="lead mt-4" data-content="theatre|p5">{!!  $content['theatre|p5'] !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <hr/>
                        <h4 class="lead mt-4" data-content="theatre|p6">{!!  $content['theatre|p6'] !!}</h4>
                        <p class="lead mt-4" data-content="theatre|p7">{!!  $content['theatre|p7'] !!}</p>

                        <a href="http://www.lamazurkadusangnoir.com/#!animation-formation/c21tp" class="btn btn-dark btn-icon rounded-pill hover-scale-110 mt-4">
                            <span class="btn-inner--text">Pour en savoir plus</span>
                            <span class="btn-inner--icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- fin atelier theatre -->
    <!-- début section sorties -->


    <section id="weekend-paris" class="position-relative pb-lg-8 pt-lg-9 bg-dark">
        <div class="bg-img-holder top-0 right-0 col-lg-6 zindex-4" data-bg-size="200" style="background-image: url('/images/paris.jpg'); background-position: initial; background-size: cover; opacity: 1; height: 100%; z-index:1;"  data-aos="fade-up" data-aos-delay="200">
            <span class="mask bg-primary opacity-6"></span>
            <img alt="Image placeholder" src="{{ asset('/images/paris.jpg') }}">
        </div>
        <div class="container py-0">
            <div class="row">
                <div class="col-lg-6 pb-0">
                    <div class="text-center text-lg-left">
                        <h4 class="h1 text-white mb-3"  data-content="paris|title2"><strong>{!! $content["paris|title2"] !!}</strong></h4>
                        <p class="lead text-muted lh-180" data-content="paris|p3">{!! $content["paris|p3"] !!}</p>
                        <div class="lead mt-4">
                            <ul>
                                <li data-content="paris|p3_li_2">{!! $content['paris|p3_li_2'] !!}</li>
                                <li data-content="paris|p3_li_3">{!! $content['paris|p3_li_3'] !!}</li>
                                <li data-content="paris|p3_li_4">{!! $content['paris|p3_li_4'] !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="weekend-paris" class="position-relative pb-lg-8 pt-lg-9 bg-dark">

        <div class="container py-6">
            <div class="row">
                <div class="bg-img-holder top-0 left-0 col-lg-6 zindex-1" data-bg-size="cover" style="background-image: url('/images/sortie.jpeg'); background-position: initial; background-size: cover; opacity: 1; height: 100%; z-index:1;">
                    <span class="mask bg-dark opacity-6"></span>
                    <img alt="Image placeholder" src="{{ asset('/images/sortie.jpeg') }}">
                </div>
                <div class="col-lg-5 ml-lg-auto">
                    <div class="text-center text-lg-left">
                        <h4 class="h1 text-white mb-3"  data-content="paris|title3"><strong>{!! $content["paris|title3"] !!}</strong></h4>
                        <p class="lead text-muted lh-180" data-content="paris|p4">{!! $content["paris|p4"] !!}</p>
                        <p class="lead text-muted lh-180" data-content="paris|p5">{!! $content["paris|p5"] !!}</p>
                        <p class="lead text-muted lh-180" data-content="paris|p6">{!! $content["paris|p6"] !!}</p>
                        <p class="lead text-muted lh-180" data-content="paris|p7">{!! $content["paris|p7"] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="grande-excursion" class="position-relative pb-lg-8 bg-dark">
        <div class="bg-img-holder top-0 right-0 col-lg-6 zindex-4" data-bg-size="200" style="background-image: url('/images/bordeaux.jpeg'); background-position: initial; background-size: cover; opacity: 1; height: 100%; z-index:1;"  data-aos="fade-up" data-aos-delay="200">
            <span class="mask bg-primary opacity-6"></span>
            <img alt="Image placeholder" src="{{ asset('/images/bordeaux.jpeg') }}">
        </div>
        <div class="container py-0">
            <div class="row">
                <div class="col-lg-5 pt-lg-4 pb-0">
                    <div class="text-lg-left">
                        <h2 class="h1 text-white mb-3"  data-content="grande_excursion|title4"><strong>{!! $content["grande_excursion|title4"] !!}</strong></h2>
                        <p class="lead lh-180 text-muted" data-content="grande_excursion|p4">{!! $content["grande_excursion|p4"] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="grande-excursion" class="position-relative pb-lg-8 bg-dark">
        <div class="bg-img-holder top-0 left-0 col-lg-6 zindex-2" data-bg-size="200" style="background-image: url('/images/pilat.jpeg'); background-position: initial; background-size: cover; opacity: 1; height: 100%; z-index:1;"  data-aos="fade-up" data-aos-delay="200">
            <span class="bg-primary opacity-6"></span>
            <img alt="Image placeholder" src="{{ asset('/images/pilat.jpeg') }}">
        </div>
        <div class="container py-6">
            <div class="row">
                <div class="col-lg-5 ml-lg-auto">
                    <div class="text-lg-left">
                        <h4 class="h1 text-white mb-3"  data-content="grande_excursion|title9"><strong>{!! $content["grande_excursion|title9"] !!}</strong></h4>
                        <p class="lead lh-180 text-muted" data-content="grande_excursion|p9">{!! $content["grande_excursion|p9"] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="grande-excursion" class="position-relative pb-lg-8 bg-dark">
        <div class="bg-img-holder top-0 right-0 col-lg-6 zindex-2" data-bg-size="200" style="background-image: url('/images/emilion.jpeg'); background-position: initial; background-size: cover; opacity: 1; height: 100%; z-index:1;"  data-aos="fade-up" data-aos-delay="200">
            <span class="mask bg-primary opacity-6"></span>
            <img alt="Image placeholder" src="{{ asset('/images/emilion.jpeg') }}">
        </div>
        <div class="container py-0">
            <div class="row">
                <div class="col-lg-5 pt-lg-4 pb-0">
                    <div class="text-lg-left">
                        <h4 class="h1 text-white mb-3"  data-content="grande_excursion|title10"><strong>{!! $content["grande_excursion|title10"] !!}</strong></h4>
                        <p class="lead lh-180 text-muted" data-content="grande_excursion|p10">{!! $content["grande_excursion|p10"] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="grande-excursion" class="position-relative bg-dark-light">
        <div class="container bg-dark-light">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-justify " data-aos="fade-up" data-aos-delay="200">
                    <h4 class="h1 text-white mb-3"><strong></strong></h4>
                    <p class="lead lh-180 text-muted" data-content="grande_excursion|p6">{!! $content["grande_excursion|p6"] !!}</p>
                    <p class="lead lh-180 text-muted" data-content="grande_excursion|p7">{!! $content["grande_excursion|p7"] !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin sorties -->


    <section id="business-law" class="slice slice-lg" style="padding-top: 0px;" data-aos="fade-up" data-aos-delay="100">
        <div class="jumbotron" id="">
            <div class="mb-5 text-center">
                <h1 class="fh5co-lead to-animate fadeIn animated text-center"  data-content="commercial_french|title1"><strong>{!! $content["commercial_french|title1"] !!}</strong></h1>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180" data-content="commercial_french|p1">{!! $content["commercial_french|p1"] !!}</p>
                </div>
            </div>
            <div class="row" style="margin: 10px; display: flex;">
                <div class="col-lg-6" style="display: flex; width: auto">
                    <div class="card hover-shadow-lg hover-scale-110" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-text pl-4">
                                    <h5 class="ma-0 " data-content="commercial_french|title2">{!! $content["commercial_french|title2"] !!}</h5>
                                    <p class="mb-0">
                                    <ul>
                                        <li data-content="commercial_french|p2_li_1">{!! $content["commercial_french|p2_li_1"] !!}</li>
                                        <li data-content="commercial_french|p2_li_2">{!! $content["commercial_french|p2_li_2"] !!}</li>
                                        <li data-content="commercial_french|p2_li_3">{!! $content["commercial_french|p2_li_3"] !!}</li>
                                        <li data-content="commercial_french|p2_li_4">{!! $content["commercial_french|p2_li_4"] !!}</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="display: flex; width: auto;">
                    <div class="card hover-shadow-lg hover-scale-110" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-text pl-4">
                                    <h5 class="ma-0 " data-content="commercial_french|title3">{!! $content["commercial_french|title3"] !!}</h5>
                                    <p class="mb-0">
                                    <ul>
                                        <li data-content="commercial_french|p3_li_1">{!! $content["commercial_french|p3_li_1"]!!}</li>
                                        <li data-content="commercial_french|p3_li_2">{!! $content["commercial_french|p3_li_2"] !!}</li>
                                        <li data-content="commercial_french|p3_li_3">{!! $content["commercial_french|p3_li_3"] !!}</li>
                                    </ul>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 10px; display: flex;">
                <div class="col-lg-6" style="display: flex; width: auto;">
                    <div class="card hover-shadow-lg hover-scale-110" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-text pl-4">
                                    <h5 class="ma-0 " data-content="commercial_french|title4">{!! $content["commercial_french|title4"] !!}</h5>
                                    <p class="mb-0">
                                    <ul>
                                        <li data-content="commercial_french|p4_li_1">{!! $content["commercial_french|p4_li_1"] !!}</li>
                                        <li data-content="commercial_french|p4_li_2">{!! $content["commercial_french|p4_li_2"] !!}</li>
                                        <li data-content="commercial_french|p4_li_3">{!! $content["commercial_french|p4_li_3"] !!}</li>
                                        <li data-content="commercial_french|p4_li_4">{!! $content["commercial_french|p4_li_4"] !!}</li>
                                        <li data-content="commercial_french|p4_li_5">{!! $content["commercial_french|p4_li_5"] !!}</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="display: flex; width: auto;">
                    <div class="card hover-shadow-lg hover-scale-110" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-text pl-4">
                                    <h5 class="ma-0 " data-content="commercial_french|title5">{!! $content["commercial_french|title5"] !!}</h5>
                                    <p class="mb-0">
                                    <ul>
                                        <li data-content="commercial_french|p5_li_1">{!! $content["commercial_french|p5_li_1"] !!}</li>
                                        <li data-content="commercial_french|p5_li_2">{!! $content["commercial_french|p5_li_2"] !!}</li>

                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
