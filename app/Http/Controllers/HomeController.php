<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\TestimonyService;
use Illuminate\Http\Request;

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
            'title' => "LES COURS",
            'imagealt' => "courses",
            'imagesrc' => "images/project/7_.jpg",
            'content' => $this->content["home|initCourse1"],
            /*"<p><strong>Les cours</strong> sont donnés par des professeurs de l’université spécialisés dans l'enseignement de la langue française à des étrangers. Le contenu de ces cours est adapté à votre niveau, que vous soyez débutant ou professeur de français à l'étranger.</p>
			<p>Participez, parmi les nombreuses options offertes l'après-midi, aux conférences, ateliers linguistiques ou à <strong>l’atelier théâtre</strong>. Tous les outils de communication sont à votre disposition sur place : salle informatique et connexions wifi.</p>",
*/
            'more' => '<a href="#">Tout savoir sur les cours</a>'
        ];
        $card2 = [
            'title' => "LES ACTIVITES",
            'imagealt' => "activities",
            'imagesrc' => "images/project/22_.jpg",
            'content' => "<p>En dehors des cours, de nombreuses <strong>excursions</strong> sont au programme de votre séjour, comme par exemple un week-end à <strong>Paris</strong>, capitale de la France, la découverte d’une région française typique. En 2020 : Bordeaux et son vignoble, avec une visite-dégustation au Château Fourcas Hosten (Listrac-Médoc), une découverte du village de Saint-Emilion et l’ascension de la spectaculaire dune du Pilat.</p>
			<p>Des <strong>animations</strong> sont proposées le soir et le week-end. Vous pouvez ainsi prendre part à des barbecues, des projections de films ou des balades dans nos belles régions françaises.</p>",
            'more' => '<a href="#">Tout savoir sur les activités</a>'
        ];

        return [$card1, $card2, $card1];
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
}
