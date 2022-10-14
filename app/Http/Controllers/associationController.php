<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\TeamService;
use App\Services\TestimonyService;
use Illuminate\Http\Request;

class associationController extends Controller
{
    private $content;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->content = ContentService::getAll(['administration_team', 'pedagogical_team', 'summercourse', 'presse']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->view('pages.we', [
            'content' => $this->content,
            'team' => (new TeamService())->get(),
            'testimonies' => TestimonyService::getAll()
        ]);
    }

    public function soon(){

        return $this->view('pages.soon');

    }
}
