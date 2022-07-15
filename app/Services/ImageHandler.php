<?php


namespace App\Services;
use Illuminate\Support\Facades\Storage;


class ImageHandler
{
    public function __construct ()
    {

    }

    public static function addOriginalFile (ressource $file) {
        dump($file);
        //Storage::disk('private')->put(, 'Contents');
    }
}