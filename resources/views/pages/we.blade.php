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
    <section class="container" id="gallery">
        <h1 class="fh5co-lead to-animate fadeIn animated text-center"><strong>GALERIE</strong></h1><br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner pb-3">
                <div class="carousel-item active ">
                    <img src="{{ asset('images/project/7_.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/project/9_.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/project/10_.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" style="height: 50px;width: 50px;background-color:black;border-radius: 15px;" aria-hidden="true"></span><span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="height: 50px;width: 50px;background-color:black;border-radius: 15px;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- fin galerie -->
@endsection
