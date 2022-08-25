<?php


namespace App\Services;


use PhpParser\Error;

class PaymentService
{


    public function payment($service){


        /*
        $this->auth();
        $this->createStripeSession();
       */

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));


        try {


            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => 1000,
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];


        } catch (Error $e) {
            http_response_code(500);

        }
    }


}