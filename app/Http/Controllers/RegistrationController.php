<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Services\ContentService;
use App\Services\ProgramService;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->content  = ContentService::get('registration');
        $this->formuleA = (new ProgramService('group_a'))->get();
        $this->formuleB = (new ProgramService('group_a'))->get();
        $this->formuleC = (new ProgramService('group_a'))->get();
        $this->formuleD = (new ProgramService('group_a'))->get();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->view('pages.registration', [
            'content' => $this->content
        ]);
    }

    public function store(Request $request){

        $registration = new Registration();
        $registration->gender  = $request->gender;
        $registration->status = $request->status;
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->birthdate = $request->birthdate;
        $registration->nationality = $request->nationality;
        $registration->address = $request->address;
        $registration->zipcode = $request->zipcode;
        $registration->city = $request->city;
        $registration->country = $request->country;
        $registration->phone = $request->phone;
        $registration->email = $request->email;
        $registration->courses_choice = $request->courses_choice;
        $registration->level = $request->level;
        $registration->level_certificate = $request->level_certificate;
        $registration->staying_type = $request->staying_type;
        $registration->hire_about_us = $request->hire_about_us;
        $registration->save();


    }
}
