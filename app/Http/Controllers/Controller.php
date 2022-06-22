<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\MenuService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getContent () {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../../public/views');
        $twig = new \Twig\Environment($loader, [
            'cache' => false, //__DIR__ . '/templates/cache',
        ], ["" => ""]);
    }

    public function view ($name, $attributes = []) {
        $attributes = array_merge(
            [
                'LANG' => 'fr',
                "menu" => MenuService::get(),
                "head" => [],
                'color' => 'white'
            ],
            $attributes
        );
        return view($name,$attributes)->withCookie(cookie('test', 'test', 45000));
    }
}
