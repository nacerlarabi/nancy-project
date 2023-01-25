@extends('layouts.main')

@section('content')

    <section id="inscription">
        <div class="container">
            <div class="fh5co-features-2-content" id="registration">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2 fh5co-section-heading " data-aos="fade-up" data-aos-delay="200">
                            <h1 class="fh5co-lead to-animate fadeIn animated text-center text-upper"><strong>{!! $content['registration|title2'] !!}</strong></h1>
                            <p class="fh5co-sub to-animate fadeIn animated">
                                {!! $content['registration|p2'] !!}
                                .<br>
                            {!! $content['registration|p3'] !!}
                            <ul>
                                {!! $content['registration|p4_li_1'] !!}
                                {!! $content['registration|p4_li_2'] !!}
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="flex-containe text-center" data-aos="fade-up" data-aos-delay="200">
                <a href="#" data-toggle="modal" class="btn btn-primary col-md-6 rounded-pill mt-6" data-target="#modal1" role="button">{!! $content['programme|subscription_title'] !!}</a>
            </p>
        </div>
    </section>

    <!-- début modal 1 identité-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">{!! $content['programme|subscribe'] !!}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">{!! $content['programme|civility'] !!}</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="gender" value="male" required><label>{!! $content['programme|mister'] !!}</label>
                        <input type="radio" name="gender" value="female"> <label>{!! $content['programme|madam'] !!} </label>
                    </div>
                    <div class="md-form mb-3">
                        <input type="radio" name="status" value="student" required> <label>{!! $content['programme|student'] !!}</label>
                        <input type="radio" name="status" value="high-school-student"> <label>{!! $content['programme|lycee'] !!}</label>
                        <input type="radio" name="status" value="other"> <label>{!! $content['programme|other_prrograms'] !!} </label>
                    </div>

                    <div class="md-form mb-3">
                        <input type="text" id="first-name" name="first_name" placeholder="Votre prénom" class="form-control validate" required>
                    </div>

                    <div class="md-form mb-3">
                        <input type="text" id="last-name" name="last_name" placeholder="Votre nom" class="form-control validate" required>
                    </div>

                    <div class="md-form mb-3">
                        <input type="date" id="birthdate" name="birthdate" placeholder="Votre date de naissance" class="form-control validate" required>
                    </div>
                    <div class="md-form mb-3">
                        <input type="text" id="nationality" name="nationality" placeholder="Votre nationalité" class="form-control validate" required>
                    </div>

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-rounded"><a id="modal1-button" data-toggle="modal" data-dismiss="modal" data-target="#modal2">{!! $content['programme|subscription_step_button'] !!}</a></button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end"> {!! $content['programme|step_button'] !!} 1/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- fin modal 1 identité-->

    <!-- début modal 2 coordonnées-->
    <!-- Modal -->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">{!! $content['programme|subscribe'] !!} </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->

                <div class="modal-body mx-4">
                    <h3 class="mb-3">{!! $content['programme|contact_details'] !!}</h3>
                    <!--Body-->
                    <div class="md-form mb-3">
                        <input type="text" id="address" name="address" placeholder="Votre adresse" class="form-control validate" required>
                    </div>
                    <div class="md-form mb-3">
                        <input type="text" id="zipcode" name="zipcode" placeholder="Votre code postal" class="form-control validate" required>
                    </div>
                    <div class="md-form mb-3">
                        <input type="text" id="city" name="zipcode" placeholder="Votre ville" class="form-control validate" required>
                    </div>
                    <div class="md-form mb-3">
                        <input type="text" id="country" name="country" placeholder="Votre pays" class="form-control validate" required>
                    </div>
                    <div class="md-form pb-3">
                        <input type="number" id="phone" name="phone" placeholder="Votre numéro de téléphone" class="form-control validate" required>
                    </div>
                    <div class="md-form mb-3">
                        <input type="email" id="email" placeholder="Votre adresse mail" class="form-control validate" required>
                    </div>
                    <div class="text-center mb-3">
                        <button id="modal2-button" type="button" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal3">Soumettre et passer à l'étape suivante </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">{!! $content['programme|step_button'] !!} 2/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- fin modal 2 coordonnées-->

    <!-- début modal 3 formule-->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">{!! $content['programme|subscribe'] !!}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">{!! $content['programme|choose_program'] !!}</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="courses-choice" value="A" required><label>{!! $content['programme|a_stay_title'] !!} {!! $content['programme|a_stay_duration'] !!} {!! $content['programme|a_stay_price'] !!} </label>
                        <hr>
                        <input type="radio" name="courses-choice" value="B"> <label> {!! $content['programme|b_stay_title'] !!} {!! $content['programme|b_stay_duration'] !!} {!! $content['programme|b_stay_price'] !!}</label>
                        <hr>
                        <input type="radio" name="courses-choice" value="C"> <label> {!! $content['programme|c_stay_title'] !!} {!! $content['programme|c_stay_duration'] !!} {!! $content['programme|c_stay_price'] !!}</label>
                        <hr>
                        <input type="radio" name="courses-choice" value="D"> <label>{!! $content['programme|d_stay_title'] !!} {!! $content['programme|d_stay_duration'] !!} {!! $content['programme|d_stay_price'] !!}</label>
                    </div>

                    <div class="text-center mb-3">
                        <button id="modal3-button" type="button" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal4">{!! $content['programme|subscription_step_button'] !!} </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">{!! $content['programme|step_button'] !!} 3/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- fin modal 3 formule-->
    <!-- modal 4 niveau -->

    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">{!! $content['programme|subscribe'] !!} </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">{!! $content['programme|french_level_title'] !!}</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="level" value="debutant-absolu" required> <label>{!! $content['programme|french_level_a_1'] !!}</label><br>
                        <input type="radio" name="level" value="debutant"> <label>{!! $content['programme|french_level_a_2'] !!}</label><br>
                        <input type="radio" name="level" value="moyen"> <label>{!! $content['programme|french_level_b_1_b_2'] !!}</label><br>
                        <input type="radio" name="level" value="bon"> <label>{!! $content['programme|french_level_c_1_c_2'] !!}</label>
                    </div>

                    <h5 class="mb-3">{!! $content['programme|check_french_certificat'] !!}</h5>
                    <div class="md-form mb-3">
                        <input type="radio" name="level-certificate" value="yes" required> <label>{!! $content['programme|yes_button'] !!}</label><br>
                        <input type="radio" name="level-certificate" value="no"> <label>{!! $content['programme|no_button'] !!}</label><br>
                    </div>

                    <div class="text-center mb-3">
                        <button id="modal4-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal5">Soumettre et passer à l'étape suivante </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">{!! $content['programme|step_button'] !!} 4/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- fin modal 4 niveau -->

    <!-- modal 5 niveau -->

    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">{!! $content['programme|subscribe'] !!}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">{!! $content['programme|stay_type_title'] !!}</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="staying-type" value="individual" required> <label>{!! $content['programme|stay_person'] !!}</label><br>
                        <input type="radio" name="staying-type" value="couple"> <label>{!! $content['programme|stay_couple'] !!}</label><br>
                    </div>

                    <h5 class="mb-3">{!! $content['programme|stay_how_to'] !!}</h5>
                    <div class="md-form mb-3">
                        <input type="radio" name="hire-about-us" value="personnal-research" required> <label>{!! $content['programme|stay_how_to_searches'] !!}</label><br>
                        <input type="radio" name="hire-about-us" value="friends"> <label>{!! $content['programme|stay_how_to_friends'] !!}</label><br>
                        <input type="radio" name="hire-about-us" value="professors"> <label>{!! $content['programme|stay_how_to_professors'] !!}</label><br>
                        <input type="radio" name="hire-about-us" value="association"> <label>{!! $content['programme|stay_how_to_aefr'] !!}</label><br>
                    </div>

                    <div class="text-center mb-3">
                        <button id="modal5-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal6">{!! $content['programme|subscription_step_button'] !!} </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">{!! $content['programme|step_button'] !!} 5/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- fin modal 5 -->

    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">Type de séjour</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="staying-type" value="individual" required> <label>Une personne</label><br>
                        <input type="radio" name="staying-type" value="couple"> <label>Couple</label><br>
                    </div>

                    <h5 class="mb-3">Comment avez-vous découvert notre programme :</h5>
                    <div class="md-form mb-3">
                        <input type="radio" name="hire-about-us" value="personnal-research" required> <label>Recherches personnelles</label><br>
                        <input type="radio" name="hire-about-us" value="friends"> <label>Amis</label><br>
                        <input type="radio" name="hire-about-us" value="professors"> <label>Professeurs</label><br>
                        <input type="radio" name="hire-about-us" value="association"> <label>Association AEFR (Russie)</label><br>
                    </div>

                    <div class="text-center mb-3">
                        <button id="modal5-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal6">Confirmer l'inscription et passer au paiement </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">{!! $content['programme|step_button'] !!} 5/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center bg-primary">
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">{!! $content['programme|payment_title'] !!}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">{!! $content['programme|payment_title_2'] !!}</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="payment-type" value="mandat" checked="checked"> <label>{!! $content['programme|payment_mandat'] !!}</label><br>
                        <input type="radio" name="payment-type" value="check"> <label>{!! $content['programme|payment_check'] !!}</label><br>
                        <input type="radio" name="payment-type" value="online"> <label>{!! $content['programme|payment_inline'] !!}</label><br>
                    </div>

                    <div id="mandat-section">
                        <h5 class="mb-3">{!! $content['programme|mandat_scan'] !!}</h5>
                        <div class="md-form mb-3">
                            <input type="file" name="mandat-payment" value="personnal-research" required> <label>{!! $content['programme|mandat'] !!}</label><br>
                        </div>
                    </div>

                    <div id="check-section">
                        <h5 class="mb-3">{!! $content['programme|check_scan'] !!}</h5>
                        <div class="md-form mb-3">
                            <input type="file" name="check-payment" value="personnal-research" required> <label>{!! $content['programme|check'] !!}</label><br>
                        </div>
                    </div>

                    <div id="online-payment-section">
                        <form id="payment-form">
                            <div id="payment-element">
                                <!--Stripe.js injects the Payment Element-->
                            </div>
                            <button id="submit">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">{!! $content['programme|paye_now'] !!}</span>
                            </button>
                            <div id="payment-message" class="hidden"></div>
                        </form>
                    </div>
                    <div class="text-center mb-3">
                        <button id="modal6-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal7">{!! $content['programme|subscruption_confirm'] !!}</a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">{!! $content['programme|step_button'] !!} 6/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>


    <!-- début section dates et prix -->

    <section id="price" class="slice slice-lg mb-0 p-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="jumbotron mb-0">
            <div class="mb-0 text-center">
                <h1 class="fh5co-lead to-animate fadeIn animated text-center"><strong>{!! $content['programme|stays_type'] !!}</strong></h1>
                <h1 class="fh5co-lead to-animate fadeIn animated text-center"><strong>{!! $content['registration|p4_li_2'] !!}</strong></h1>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">
                        {!! $content['programme|stays_type_content'] !!}
                    </p>
                </div>
            </div>
            <div class="row" style="margin: 5px; display: flex;">
                <div class="col-lg-4 mb-3" style="display: flex; width: auto">
                    <div class="card" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start formuleCard">
                                <div class="icon-text pl-4 formuleContainer">
                                    <h5 class="ma-0 "><strong>{!! $content['programme|formula_a_title'] !!}</strong></h5>
                                    <p class="mb-4">
                                        {!! $content['programme|formula_a_duration'] !!}<br>
                                        {!! $content['programme|formula_a_from_to'] !!}<br>
                                        {!! $content['programme|formula_a_excursion'] !!}<br>
                                        {!! $content['programme|formula_a_price_value'] !!}
                                    <div class="mt-2 text-center"><a role="button" data-toggle="modal" class="btn btn-primary col-md-4 rounded-pill formuleCta" data-target="#modal1">{!! $content['programme|choose_formula'] !!}</a></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" style="display: flex; width: auto;">
                    <div class="card" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start formuleCard">
                                <div class="icon-text pl-4 formuleContainer">
                                    <h5 class="ma-0 "><strong>{!! $content['programme|formula_b_title'] !!}</strong></h5>
                                    <p class="mb-4">
    {!! $content['programme|formula_b_duration'] !!}<br>
                                        {!! $content['programme|formula_b_from_to'] !!}<br>
                                        {!! $content['programme|formula_b_excursion'] !!}<br>
                                    {!! $content['programme|formula_b_price_value'] !!}
<div class="mt-2 text-center"><a role="button" data-toggle="modal" class="btn btn-primary col-md-4 rounded-pill formuleCta" data-target="#modal1">{!! $content['programme|choose_formula'] !!}</a></div>
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mb-3" style="display: flex; width: auto;">
<div class="card" style="width: 100%;">
<div class="card-body py-4">
<div class="d-flex align-items-start formuleCard">
<div class="icon-text pl-4 formuleContainer">
<h5 class="ma-0 "><strong>{!! $content['programme|formula_c_title'] !!}</strong></h5>
<p class="mb-4">
    {!! $content['programme|formula_c_duration'] !!}<br>
    {!! $content['programme|formula_c_from_to'] !!}<br>
    {!! $content['programme|formula_c_excursion'] !!}<br>
    {!! $content['programme|formula_c_price_value'] !!}
<div class="mt-2 text-center"><a role="button" data-toggle="modal" class="btn btn-primary col-md-4 rounded-pill formuleCta" data-target="#modal1">{!! $content['programme|choose_formula'] !!}</a></div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row" style="margin: 5px; display: flex;">
<div class="col-lg-12" style="display: flex; width: auto;">
<div class="card {{--hover-shadow-lg hover-scale-110--}}" style="width: 100%;">
<div class="card-body py-4">
<div class="d-flex align-items-start formuleCard">
<div class="icon-text pl-4 formuleContainer">
<h5 class="ma-0 "><strong>{!! $content['programme|formula_d_title'] !!}</strong></h5>
<p class="mb-4">
    {!! $content['programme|formula_d_duration'] !!}<br>
    {!! $content['programme|formula_d_1_from_to'] !!}<br>
    {!! $content['programme|formula_d_2_from_to'] !!}<br>
    {!! $content['programme|formula_d_3_from_to'] !!}<br>
    {!! $content['programme|formula_d_4_from_to'] !!}<br>
    {!! $content['programme|formula_d_excurssion'] !!}

    {!! $content['programme|formula_d_price_value'] !!}
<div class="mt-2 text-center"><a role="button" class="btn btn-primary col-md-4 rounded-pill formuleCta">{!! $content['programme|choose_formula'] !!}</a></div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!--fin dates et prix -->

<!-- début section accueil des mineurs -->

<section id="underage" class="position-relative pb-lg-8 bg-dark mt-0" data-aos="fade-up" data-aos-delay="200">
<div class="py-0" style="padding: 30px;">
<div class="row">
<div class="col-lg-12 pt-lg-9">
<div class="container">
<h1 class="text-white fh5co-lead to-animate fadeIn animated text-center">{!! $content['programme|minor_title'] !!}</h1>
<p class="lead lh-180 text-muted">
    {!! $content['programme|minor_content'] !!}
</p>
<p class="flex-containe text-center" data-aos="fade-up" data-aos-delay="200">
<a role="button"  data-toggle="modal" class="btn btn-primary col-md-6 rounded-pill mt-6" data-target="#modal1">{!! $content['programme|minor_button'] !!}</a>
</p>

</div>
</div>
</div>
</div>
</section>

<!-- fin accueil des mineurs-->
@endsection
<script>
import BootstrapColorpicker
from "../../../public/vendor/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker";
export default {
components: {BootstrapColorpicker}
}
</script>