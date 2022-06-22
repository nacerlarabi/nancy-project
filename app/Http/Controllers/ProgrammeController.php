<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->content = ContentService::getAll(['cours', 'teaching_seminar', 'outings', 'paris', 'grande_excursion', 'theatre', 'commercial_french']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index ()
    {
        return $this->view('pages.programme', [
            'content' => $this->content
        ]);
    }
}