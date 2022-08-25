<?php


namespace App\Services;


class ImagesService
{

    public function handler(Image $image){

        $folderPath = public_path('upload/');

        $imageParts = explode(";base64,", $image);
        $imageTypeAux = explode("image/", $imageParts[0]);
        $imageType = $imageTypeAux[1];
        $imageBase64 = base64_decode($imageParts[1]);

        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath.$imageName;

        file_put_contents($imageFullPath, $imageBase64);

        $saveFile = new Picture;
        $saveFile->name = $imageName;
        $saveFile->save();

        return response()->json(['success'=>'Crop Image Uploaded Successfully']);

    }

}