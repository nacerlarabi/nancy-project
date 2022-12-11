@extends('layouts.main')

@section('content')

    <div class="container" id="ca-team" data-aos="fade-up" data-aos-delay="200">
        <!-- section  composition CA-->
        <div class="row">
            <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-center ">
                <h1 class="fh5co-lead to-animate fadeIn animated" data-content="administration_team|title"><strong>{!! $content['administration_team|title'] !!}</strong></h1><br>
                <br>
                <h4 class="pb-3" data-content="administration_team|subTitle1"><strong>{!! $content['administration_team|subTitle1'] !!}</strong></h4>
                <p class="fh5co-sub to-animate fadeIn animated" data-aos="fade-up" data-aos-delay="200">
                    {!! $content['administration_team|p1'] !!}
                </p>
                <table class="table table-responsive-lg table-bordered" data-aos="fade-up" data-aos-delay="200">
                    <thead>
                    <tr>
                        <th scope="col">Nom et prénom du membre</th>
                        <th scope="col">Profession</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p2'])[0] !!}</td>
                        <td>{!! $content['administration_team|p2'] !!}</td>
                    </tr>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p3'])[0] !!}</td>
                        <td>{!! $content['administration_team|p3'] !!}</td>
                    </tr>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p4'])[0] !!}</td>
                        <td>{!! $content['administration_team|p4'] !!}</td>
                    </tr>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p5'])[0] !!}</td>
                        <td>{!! $content['administration_team|p5'] !!}</td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="py-3"><strong>Autres membres du conseil d'aministration</strong></h4>
                <table class="table table-responsive-lg table-bordered" data-aos="fade-up" data-aos-delay="200">
                    <thead>
                    <tr>
                        <th scope="col">Nom et prénom du membre</th>
                        <th scope="col">Profession</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p6'])[0] !!}</td>
                        <td>{!! $content['administration_team|p6'] !!}</td>
                    </tr>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p7'])[0] !!}</td>
                        <td>{!! $content['administration_team|p7'] !!}</td>
                    </tr>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p8'])[0] !!}</td>
                        <td>{!! $content['administration_team|p8'] !!}</td>
                    </tr>
                    <tr>
                        <td>{!! explode(",", $content['administration_team|p9'])[0] !!}</td>
                        <td>{!! $content['administration_team|p9'] !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- fin composition CA-->
    </div>
    <!-- section équipe pédagogique -->

    <div class="container p-0" id="pedagogic-team" data-aos="fade-up" data-aos-delay="200">
        <!--<div class="container p-0" id="team-container" data-aos="fade-up" data-aos-delay="200">-->
        <div class="row p-0">
            <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-center ">
                <h1 class="fh5co-lead to-animate fadeIn animated" data-content="pedagogical_team|title"><strong>{!! $content['pedagogical_team|title'] !!}</strong></h1>
            </div>
        </div>
        <div class="col mb-3" id="team-card" style="margin-top: 20px !important;">
            @foreach($team as $member)
                <div class="col-md-12 reassurance" style="display: flex; ">
                    <div class="card-element" style="display: flex; justify-content: flex-start;">
                        <p class="col-3 pt-2 w-50">
                            <img src="{{ asset($member['picture']) }}" style="height: 300px; width: 100%;">
                        </p>
                        <div class="card-body" style="display: flex;">
                            <div class="d-flex align-items-start">
                                <div class="icon-text px-0">
                                    <h5><strong>{{ $member["firstname"] }} {{ $member["lastname"] }}</strong></h5>
                                    <p class="mb-0 p-0" style="font-size: 15px;" data-content="aboutit">{!! $content[$member["aboutit"]] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    <hr>
    <!-- fin section équipe -->
    <!-- section pourquoi choisir -->
    <div class="container py-4" id="why" data-aos="fade-up" data-aos-delay="200">
        <!--<div class="container py-4" id="de-nous-a-vous-container" data-aos="fade-up" data-aos-delay="200">-->
        <div class="row">
            <div class="col-md-12 col-md-offset-2 fh5co-section-heading text-center ">
                <h1 class="fh5co-lead to-animate fadeIn animated" data-content="summercourse|title"><strong>{!! $content['summercourse|title'] !!}</strong></h1><br>

                <h5 data-content="summercourse|p1">{!! $content['summercourse|p1'] !!}</h5>
                <ul>
                    <li data-content="summercourse|p1_1"><strong>{!! $content['summercourse|p1_1'] !!}</strong> : {!! $content['summercourse|p1_2'] !!}</li>
                    <li data-content="summercourse|p2"><strong>{!! $content['summercourse|p2'] !!}</strong> : {!! $content['summercourse|p2_1'] !!}
                    </li>
                    <li data-content="summercourse|p3"><strong>{!! $content['summercourse|p3'] !!}</strong> : {!! $content['summercourse|p3_1'] !!}</li>
                </ul>
                <p class="fh5co-sub to-animate fadeIn animated" data-aos="fade-up" data-aos-delay="200">
                    {!! $content['summercourse|p3_2'] !!}
                </p>
            </div>
        </div>
    </div>
    <hr>
    <!-- fin pourquoi choisir-->

    <!-- section medias -->
    <div class="container py-4" id="summer-courses" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 fh5co-section-heading">
                <h1 class="fh5co-lead to-animate fadeIn animated text-center" data-content="presse|title"><strong>{!! $content['presse|title'] !!}</strong></h1><br>
                <ul>
                    <li data-content="presse|p1">{!! $content['presse|p1'] !!}</li>
                    <li data-content="presse|p3">{!! $content['presse|p3'] !!}:
                        <ul>
                            <li>“L'Est Républicain“ - 22 Juillet 2014 (1ère de couverture)</li>
                            <li>“L'Est Républicain“ - 22 Juillet 2014</li>
                            <li>“Les Tablettes Lorraines“ - 14 Juillet 2014</li>
                            <li>“L'Est Républicain“ - 8 Juillet 2015</li>
                            <li>“La semaine“ - 16 Juillet 2015“</li>
                            <li>“Les Tablettes Lorraines“ - 20 Juillet 2015</li>
                            <li>“L'Est Républicain“ - 22 Juillet 2015</li>
                            <li>“L'Est Républicain“ - 22 Juillet 2015</li>
                            <li>“Les Tablettes Lorraines“ - 27 Juillet 2015</li>
                            <li>“L’Est Républicain” – 13 juillet 2016</li>
                            <li>“L’Est Républicain” – 26 juillet 2016</li>
                            <li>“L’Est Républicain” – 16 juillet 2017</li>
                            <li>“Les Tablettes Lorraines” 17 juil 2017</li>
                            <li>“L’Est Républicain” – 25 juillet 2017</li>
                            <li>“L’Est Républicain” – 26 juillet 2017</li>
                            <li>“L’Est Républicain” – 26 juillet 2017</li>
                            <li>“L’Est Républicain” – 18 juillet 2018</li>
                            <li>“L’Est Républicain” – 21 juillet 2018</li>
                            <li>“L’Est Républicain” – 26 juillet 2018</li>
                            <li>“Les Tablettes Lorraines” – 30 juillet 2018</li>
                            <li>“L’Est Républicain” – 12 juillet 2019</li>
                            <li>“L’Est Républicain” – 19 juillet 2019</li>
                            <li>“Les Tablettes Lorraines” – 22 juillet 2019</li>
                            <li>“L’Est Républicain” – 23 juillet 2019</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- fin medias-->
    <hr>
    <!-- section galerie -->
    <section class="container" style="min-width:100%">
        <h1 class="fh5co-lead to-animate fadeIn animated text-center"><strong>GALERIE</strong></h1><br>
            <div style="background-color: #E8F6FE; width:100%; margin-bottom: 5%;">
                <a class="elem" href="https://stage.france-summercourses.fr/images/project/7_.jpg">
                    <span style="background-image: url(https://stage.france-summercourses.fr/images/project/7_.jpg);"></span>
                </a>
                <a class="elem" href="https://stage.france-summercourses.fr/images/project/9_.jpg">
                    <span style="background-image: url(https://stage.france-summercourses.fr/images/project/9_.jpg);"></span>
                </a>
                <a class="elem" href="https://stage.france-summercourses.fr/images/project/10_.jpg">
                    <span style="background-image: url(https://stage.france-summercourses.fr/images/project/10_.jpg);"></span>
                </a>
            </div>
    </section>

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

    <div class="test-imo" style="padding: 0;
			font-family: 'Lato', sans-serif; background-color: #f0f8ff;">
        <section class="spacer" style="background-color: #f0f8ff;">
            <div class="testimonial-section">
                <div class="testi-user-img">
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <?php $counter=count($testimonies)-1; ?>
                            @foreach($testimonies as $testimonie)
                                <div class="swiper-slide">
                                    <img src="{{ asset($testimonie['picture']) }}" class="u<?php echo $counter; ?>" alt="project image">
                                    <?php $counter-- ?>
                                    {{-- </div> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="user-saying" style="box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75);
-webkit-box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75);
-moz-box-shadow: -117px -3px 109px -90px rgba(0,0,0,0.75); z-index: 1;">
                    <div class="swiper-container testimonial">
                        <!-- Additional required wrapper -->
                        <section class="swiper-wrapper">
                            @foreach ($testimonies as $testimonie)
                                <div class="swiper-slide">
                                    <div class="quote">
                                        <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
                                        <p>{!! \Illuminate\Support\Str::limit($testimonie['deposit'], 350, ' ...') !!}</p>
                                        <div class="name" style="color:black;">-{!! $testimonie['firstname'] !!} {!! $testimonie['lastname'] !!}-</div>
                                        <div class="designation" style="color:black;">{!! $testimonie['occupation'] !!} - {!! $testimonie['country'] !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- fin galerie -->
@endsection
