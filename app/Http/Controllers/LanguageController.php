<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    public function index () {

        return $this->view('pages.locale', []);
    }

    public function setLocale (Request $request, $locale = 'en') {

        if (!in_array($locale, ['en', 'ru', 'zh', 'fr'])){
            $locale = 'en';
        }

        $request->session()->put('locale',$locale);

        Session::put('locale', $locale);

        if(str_contains(url()->previous(),'/locale')){

            return redirect('/');

        }
        else{

            return redirect()->back();

        }

    }
}
