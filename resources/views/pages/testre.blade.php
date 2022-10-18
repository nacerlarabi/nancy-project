@extends('layouts.main')

@section('content')

    <div data-ssd-confirm>

        <div data-ssd-confirm-block="remove">

            <p data-ssd-confirm-content></p>

            <nav>

            <span data-button-wrapper>

                <span
                        id="confirm-registration"
                        class="small alert button-al"
                        data-ssd-confirm-no data-toggle="modal" data-dismiss="modal" data-target="#modal6">OUI</span>

                <span
                        class="small alert disabled button-al hide"
                        data-processing
                ><i class="fa fa-spinner fa-spin fa-fw"></i></span>

            </span>

                <span class="small button-al" data-ssd-confirm-no>NON</span>

            </nav>

        </div>

    </div>

    <div data-ssd-confirm-overlay></div>

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
                <a role="button" href="#" data-toggle="modal" class="btn btn-primary col-md-6 rounded-pill mt-6" data-target="#modal1" role="button" style="background-color: #1496E3; border-color: #1496E3;">Inscrivez-vous pour profiter de nos programmes</a>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">Civilité</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="gender" value="male" required><label> Monsieur</label>
                        <input type="radio" name="gender" value="female"> <label> Madame</label>
                    </div>
                    <div class="md-form mb-3">
                        <input type="radio" name="status" value="student" required> <label> Etudiant</label>
                        <input type="radio" name="status" value="high-school-student"> <label> Lycéen</label>
                        <input type="radio" name="status" value="other"> <label> Autre</label>
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
                        <button type="submit" class="btn btn-primary btn-block btn-rounded"><a id="modal1-button" data-toggle="modal" data-dismiss="modal" data-target="#modal2">Soumettre et passer à l'étape suivante </a></button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 1/6</p>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->

                <div class="modal-body mx-4">
                    <h3 class="mb-3">Coordonnées</h3>
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
                        <input type="email" id="email" id="email" placeholder="Votre adresse mail" class="form-control validate" required>
                    </div>
                    <div class="text-center mb-3">
                        <button id="modal2-button" type="button" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal3">Soumettre et passer à l'étape suivante </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 2/6</p>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">Choix de la formule</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="courses-choice" value="A" required><label> Séjour A - 4 semaines - 2090 €</label>
                        <hr>
                        <input type="radio" name="courses-choice" value="B"> <label> Séjour B - 3 semaines - 1800 €</label>
                        <hr>
                        <input type="radio" name="courses-choice" value="C"> <label> Séjour B - 2 semaines - 1390 €</label>
                        <hr>
                        <input type="radio" name="courses-choice" value="D"> <label> Séjour D - Par semaine au choix - 1000 €</label>
                    </div>

                    <div class="text-center mb-3">
                        <button id="modal3-button" type="button" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal4">Soumettre et passer à l'étape suivante </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 3/6</p>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">Niveau de français</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="level" value="debutant-absolu" required> <label>Débutant absolu ou A1</label><br>
                        <input type="radio" name="level" value="debutant"> <label>Débutant ou A2</label><br>
                        <input type="radio" name="level" value="moyen"> <label>Moyen ou B1/B2</label><br>
                        <input type="radio" name="level" value="bon"> <label>Bon ou C1/C2</label>
                    </div>

                    <h5 class="mb-3">Je fournis en fichier joint un certificat officiel de mon niveau</h5>
                    <div class="md-form mb-3">
                        <input type="radio" name="level-certificate" value="yes" required> <label>Oui</label><br>
                        <input type="radio" name="level-certificate" value="no"> <label>Non</label><br>
                    </div>

                    <div class="text-center mb-3">
                        <button id="modal4-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal5">Soumettre et passer à l'étape suivante </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 4/6</p>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
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
                        <button id="modal5-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal6">Soumettre et passer à l'étape suivante </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 5/6</p>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Inscrivez-vous</h3>
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
                        <button id="modal5-button" type="submit" class="btn btn-primary btn-block btn-rounded"
                                data-ssd-confirm-trigger="remove"
                                data-ssd-confirm-message="Confirmez vous que les informations que vous avez saisi sont correctes et passer au paiement ?"
                                data-ssd-confirm-url="/remove.json"
                                data-ssd-confirm-behaviour="removeRow"><a role="button">Confirmer l'inscription et passer au paiement </a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 5/6</p>
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
                    <h3 class="modal-title w-100 text-light font-weight-bold my-3" id="myModalLabel">Paiement</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <h3 class="mb-3">Type de paiement</h3>
                    <div class="md-form mb-3">
                        <input type="radio" name="payment-type" value="mandat" checked="checked"> <label>Paiement par mandat</label><br>
                        <input type="radio" name="payment-type" value="check"> <label>Paiement par chèque bancaire</label><br>
                        <input type="radio" name="payment-type" value="online"> <label>Paiement en ligne</label><br>
                    </div>

                    <div id="mandat-section">
                        <h5 class="mb-3">Veuillez scanner votre mandat :</h5>
                        <div class="md-form mb-3">
                            <input type="file" name="mandat-payment" value="personnal-research" required> <label>Mandat</label><br>
                        </div>
                    </div>

                    <div id="check-section">
                        <h5 class="mb-3">Veuillez scanner votre chèque bancaire :</h5>
                        <div class="md-form mb-3">
                            <input type="file" name="check-payment" value="personnal-research" required> <label>Chèque</label><br>
                        </div>
                    </div>

                    <div id="online-payment-section">
                        <form id="payment-form">
                            <div id="payment-element">
                                <!--Stripe.js injects the Payment Element-->
                            </div>
                            <button id="submit">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">Payer maintenant</span>
                            </button>
                            <div id="payment-message" class="hidden"></div>
                        </form>
                    </div>
                    <div class="text-center mb-3">
                        <button id="modal6-button" type="submit" class="btn btn-primary btn-block btn-rounded"><a role="button" data-toggle="modal" data-dismiss="modal" data-target="#modal7">Confirmer l'inscription</a> </button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Étape 6/6</p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>


    <!-- début section dates et prix -->

    <section id="price" class="slice slice-lg mb-0 p-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="jumbotron mb-0">
            <div class="mb-0 text-center">
                <h1 class="fh5co-lead to-animate fadeIn animated text-center"><strong>TYPES DE SÉJOURS</strong></h1>
                <h1 class="fh5co-lead to-animate fadeIn animated text-center"><strong>{!! $content['registration|p4_li_2'] !!}</strong></h1>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">
                        Différentes formules vous sont proposées, tenant compte de vos disponibilités et de vos moyens.<br>
                        Si vous n'avez pas la possibilité d'être hébergé par des amis ou de la famille, nous vous conseillons de choisir une des formules « TOUT COMPRIS », c'est-à-dire comprenant l'enseignement, le logement, les repas, les visites, les sorties, les soirées et les excursions (repas du week end non fournis).<br>
                        <strong>N'oubliez pas cependant de prévoir l'indispensable argent de poche.</strong>
                    </p>
                </div>
            </div>
            <div class="row" style="margin: 5px; display: flex;">
                <div class="col-lg-4 mb-3" style="display: flex; width: auto">
                    <div class="card" style="width: 100%;">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start formuleCard">
                                <div class="icon-text pl-4 formuleContainer">
                                    <h5 class="ma-0 "><strong>Formule A</strong></h5>
                                    <p class="mb-4">
                                        4 Semaines<br>
                                        du 29/06/2020 au 24/07/2020<br>
                                        + week end à Paris + grande excursion<br>
                                        Prix : 2090 €
                                    <div class="mt-2 text-center"><a href="#" class="btn btn-primary col-md-4 rounded-pill formuleCta" style="background-color: #1496E3; border-color: #1496E3;">choisir cette formule</a></div>
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
                                    <h5 class="ma-0 "><strong>Formule B</strong></h5>
                                    <p class="mb-4">
                                        3 Semaines<br>
                                        du 29/06/2020 au 19/07/2020<br>
                                        + week end à Paris + grande excursion<br>
                                        Prix : 1800 €
                                    <div class="mt-2 text-center"><a href="#" class="btn btn-primary col-md-4 rounded-pill formuleCta" style="background-color: #1496E3; border-color: #1496E3;">choisir cette formule</a></div>
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
                                    <h5 class="ma-0 "><strong>Formule C</strong></h5>
                                    <p class="mb-4">
                                        2 Semaines<br>
                                        du 29/06/2020 au 11/07/2020<br>
                                        + grande excursion<br>
                                        Prix : 1390 €
                                    <div class="mt-2 text-center"><a href="#" class="btn btn-primary col-md-4 rounded-pill formuleCta" style="background-color: #1496E3; border-color: #1496E3;">choisir cette formule</a></div>
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
                                    <h5 class="ma-0 "><strong>Formule D</strong></h5>
                                    <p class="mb-4">
                                        Par semaine au choix<br>
                                        D1 - du 29/06/2020 au 19/07/2020<br>
                                        D2 - du 29/06/2020 au 19/07/2020<br>
                                        D3 - du 29/06/2020 au 19/07/2020<br>
                                        D4 - du 29/06/2020 au 19/07/2020<br>
                                        Cours seulement 8h30 - 12h30 et 14h - 15h30 (Sauf jours de sorties et départs d'excursions)<br>
                                        Pas de logement, repas, animations, cinéma, excursions d'une journée, soirées, Paris, Grande excursion<br>
                                        Prix : 250 €
                                    <div class="mt-2 text-center"><a href="#" class="btn btn-primary col-md-4 rounded-pill formuleCta" style="background-color: #1496E3; border-color: #1496E3;">choisir cette formule</a></div>
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
                        <h1 class="text-white fh5co-lead to-animate fadeIn animated text-center">ETUDIANTS MINEURS</h1>
                        <p class="lead lh-180 text-muted">
                            Nous accueillons les mineurs de moins de 18 ans au 27 juin 2020 accompagnés (groupe scolaire, venue avec un parent ou responsable?) ou non accompagnés.
                            L'âge minimal requis est de 12 ans, à condition que les parents estiment que leur enfant est suffisamment autonome.
                            Les mineurs que nous accueillons font l'objet d'une attention particulière quant à leur confort et à leur sécurité. Nos animateurs, qui sont à la disposition des étudiants 24H/24, résident dans les mêmes bâtiments qu'eux, et peuvent être joints à tout moment du jour et de la nuit. Tous les participants des Cours d'Eté disposent du numéro de chambre et de téléphone des animateurs.
                            Nous engageons notamment tout mineur qui remarquerait un comportement inhabituel de la part de quiconque à le signaler aux animateurs.</p>
                        <p><strong>ATTENTION : Nous ne sommes pas un camp de vacances pour adolescents, mais un centre de séjour linguistique. Les participants à notre séjour sont en totale autonomie. Tous sont logés en chambre individuelle parmi la totalité de nos participants, dans des bâtiments qui sont mixtes (ou en famille chez l'habitant), et disposent d'une clef leur permettant d'entrer et sortir aux heures de leur choix.</strong></p>
                        <p class="lead lh-180 text-muted">
                            Ils peuvent cependant, avant leur arrivée, demander à disposer d'une chambre voisine d'un adulte ou d'un autre mineur de leur connaissance. En aucun cas nous ne surveillons les participants à notre programme, fussent-ils très jeunes. Nous n'exerçons aucun regard sur leurs horaires quotidiens, leurs fréquentations, le déroulement de leurs soirées. Même loin de leur pays, ils demeurent sous l'entière responsabilité de leurs parents ou autres responsables légaux, à qui nous demandons de signer une <a href="https://france-summercourses.fr/fr/code-conduct.pdf" target="_blank" style="color: aquamarine; text-decoration: underline aquamarine;">décharge</a> dégageant les Cours d'Eté de toute responsabilité envers le mineur.
                            En outre, nous demandons aux parents ou responsables légaux ainsi qu'aux mineurs concernés, de signer <a href="https://france-summercourses.fr/fr/legal-release.pdf" target="_blank" style="color: aquamarine; text-decoration: underline aquamarine;">la charte des mineurs</a> , en vertu de laquelle ils s'engagent à respecter un certain nombre de points auxquels le manquement se solderait par leur exclusion des Cours d'Eté.
                            Sans le retour de la décharge parentale ET de la charte des mineurs signée au moment du versement de l'acompte de 250 euros (envoi par scan ET par courrier postal), l'inscription du mineur ne sera pas prise en compte.
                        </p>
                        <p class="flex-containe text-center" data-aos="fade-up" data-aos-delay="200">
                            <a role="button" href="#" data-toggle="modal" class="btn btn-primary col-md-6 rounded-pill mt-6" data-target="#modal1" style="background-color: #1496E3; border-color: #1496E3;">Inscrivez-vous pour profiter de nos programmes</a>
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