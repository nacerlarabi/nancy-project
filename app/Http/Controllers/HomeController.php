<?php

namespace App\Http\Controllers;

use App\Models\PaymantMandate;
use App\Models\Payment;
use App\Models\PaymentCheck;
use App\Models\PaymentInline;
use App\Models\Registration;
use App\Services\ContentService;
use App\Services\TestimonyService;
use http\Client\Response;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->content = ContentService::get('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dump(ContentController::showList('home'));
        return $this->view('pages.home', [
            'content' => $this->content,
            'testimonies' => TestimonyService::getAll(),
            "cards" => $this->getCards()
        ]);
    }

    public function getCards()
    {
        $card1 = [
            'title' => $this->content["home|title"],
            'imagealt' => "courses",
            'imagesrc' => "images/project/7_.jpg",
            'content' => $this->content["home|init1"],
            /*"<p><strong>Les cours</strong> sont donnés par des professeurs de l’université spécialisés dans l'enseignement de la langue française à des étrangers. Le contenu de ces cours est adapté à votre niveau, que vous soyez débutant ou professeur de français à l'étranger.</p>
			<p>Participez, parmi les nombreuses options offertes l'après-midi, aux conférences, ateliers linguistiques ou à <strong>l’atelier théâtre</strong>. Tous les outils de communication sont à votre disposition sur place : salle informatique et connexions wifi.</p>",
*/
            'more' => '<a href="#">Tout savoir sur les cours</a>'
        ];
        $card2 = [
            'title' => $this->content["home|titleActivities"],
            'imagealt' => "activities",
            'imagesrc' => "images/project/22_.jpg",
            'content' => $this->content["home|activities1"],
            'more' => '<a href="#">Tout savoir sur les cours</a>'
        ];

        $card3 = [
            'title' => $this->content["home|titleNancy"],
            'imagealt' => "nancy",
            'imagesrc' => "images/project/10_.jpg",
            'content' => $this->content["home|nancy1"],
            'more' => '<a href="#">Tout savoir sur les cours</a>'
        ];

        return [$card1, $card2, $card3];
    }

    public function getTestimonies()
    {
        // max 10
        $testimony = [
            'image' => "images/testimonies/testimony_2.png",
            'identity' => "<strong>Marina</strong> , professeure à Volgograd, Russie",
            'message' => "<p>Merci à Gilles et à toute l'équipe - professeurs et animateurs - pour le plaisir de perfectionner mon français et de découvrir le patrimoine culturel.</p>
			<p>Un merci spécial à Lih qui est une personne avec un grand coeur, prête à aider et à soutenir à tout moment.</p>
			<p>Courage et bonne continuation !</p>"
        ];

        return [$testimony, $testimony, $testimony, $testimony, $testimony, $testimony, $testimony, $testimony, $testimony, $testimony];
    }

    public function checkoutSecretKey(){

        \Stripe\Stripe::setApiKey('sk_test_51LaGT1C7Mi5uat9wCRt1ATKcsdohYTLaKGjBsIvlUI0aa1ACl2vgkksEjO5sd2nYIMeBmNrnqvO0703rmh1Io66X00cqGdJRjr');

        try {



            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => 1400,
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            return response()->json($output);

        } catch (Error $e) {
            http_response_code(500);
            return json_encode(['error' => $e->getMessage()]);
        }


    }

    public function testCheckout(){

        return view('pages.checkout-payment');

    }


    public function createMandatePayment(Request $request){

        $payment = new Payment();
        $payment->payment_details = "Paiement d'inscription";
        $payment->save();

        $mandatePayment = new PaymantMandate();
        $mandatePayment->file_path = "path to file";
        $mandatePayment->save();

        $payment->payable()->associate($mandatePayment);



    }
    public function createCheckPayment(Request $request){

        $payment = new Payment();
        $payment->payment_details = "Paiement d'inscription";
        $payment->save();

        $checkPayment = new PaymentCheck();
        $checkPayment->file_path = "path to file";
        $checkPayment->save();

        $payment->payable()->associate($checkPayment);


    }
    public function createOnlinePayment(Request $request){

        $payment = new Payment();
        $payment->payment_details = "Paiement d'inscription";
        $payment->save();

        $inlinePayment = new PaymentInline();
        $inlinePayment->file_path = "path to file";
        $inlinePayment->save();

        $payment->payable()->associate($inlinePayment);

    }






}
