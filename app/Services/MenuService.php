<?php

namespace App\Services;

use App\Models\Menu;

class MenuService
{
    private $menuCollection = [];

    public function __construct ()
    {
        $this->init();
    }

    private function init () {
        $this->build();
        $this->buildSubs();
    }

    public static function get () {
        return (new self())->menuCollection;
    }

    private function build () {
        $this->loadMenuFromDB();
        $this->loadSubMenuFromDB();

        $programme = [
            "title" => "PROGRAMME",
            "uri" => "programme",
            "type" => "grouped",
            "submenu" => [
                [
                    "title" => "Cours",
                    "uri" => "programme",
                    "elements" => [
                        ["mnemonic" => "fle", "title" => "FLE tous niveaux"],
                        ["mnemonic" => "seminaire-pedagogique", "title" => "Le séminaire pédagogique"],
                        ["mnemonic" => "theatre", "title" => "L’atelier théâtre"],
                        ["mnemonic" => "business-law", "title" => "La langue du droit et des affaires"]
                    ]
                ],[
                    "title" => "Les Sorties",
                    "uri" => "programme",
                    "elements" => [
                        ["mnemonic" => "weekend-paris", "title" => "Le week-end à Paris"],
                        ["mnemonic" => "grande-excursion", "title" => "La grande excursion"]
                    ]
                ]
            ]
        ];

        $inscription = [
            "title" => "INSCRIPTION",
            "uri" => "inscription",
            "type" => "simple",
            "submenu" => [
                ["mnemonic" => "inscription",   "uri" => "/inscription", "title" => "S'inscrire"],
                ["mnemonic" => "price",   "uri" => "/inscription", "title" => "Dates et prix"],
                ["mnemonic" => "underage",   "uri" => "/inscription", "title" => "Etudiants mineurs"]
            ]
        ];

        $summerScool = [
            "title" => "DE NOUS A VOUS",
            "uri" => "we",
            "type" => "simple",
            "submenu" => [
                ["mnemonic" => "ca-team",   "uri" => "/we", "title" => "Composition du CA"],
                ["mnemonic" => "pedagogic-team",   "uri" => "/we", "title" => "Equipe Pédagogique"],
                ["mnemonic" => "why", "uri" => "/we", "title" => "Pourquoi choisir ..."],
                ["mnemonic" => "summer-courses",   "uri" => "/we", "title" => "Les cours d'été dans les ..."],
                ["mnemonic" => "gallery",   "uri" => "/we", "title" => "Galerie"],
                ["mnemonic" => "testimonies",   "uri" => "/we", "title" => "témoignage"],
            ]
        ];

        $sejour = [
            "title" => "VOTRE SEJOUR",
            "uri" => "/sejour",
            "type" => "simple",
            "submenu" => [
                ["mnemonic" => "hebergement",   "uri" => "/sejour", "title" => "Voyage et hébérgement"],
                ["mnemonic" => "nancy",   "uri" => "/sejour", "title" => "La ville de Nancy"],
                ["mnemonic" => "reminder",   "uri" => "/sejour", "title" => "N'oubliez pas"],
                ["mnemonic" => "links",   "uri" => "/sejour", "title" => "Liens utiles"]
            ]
        ];

        $this->menuCollection =  [$programme, $inscription, $summerScool, $sejour];
    }

    private function buildSubs () {
        return false;
    }

    private function loadMenuFromDB () {
        Menu::smartLoad();
    }

    private function loadSubMenuFromDB () {

    }
}
