<?php

namespace App\Http\Controllers;

use App\DataTables\ContentDataTable;
use App\DataTables\ImagesDataTable;
use App\DataTables\RolesDataTable;
use App\DataTables\SessionSubscuptionDataTable;
use App\Models\Content;
use App\Models\Picture;
use App\Models\SessionSubscruption;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\DataTables\RegistrationDataTable;
use App\DataTables\UserDataTable;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{

    public function index(RegistrationDataTable $dataTable){

        return $dataTable->render('admin.registrations');

    }

    public function roles(RolesDataTable $dataTable)
    {
        return $dataTable->render('admin.roles');
    }

    public function users(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.users');
    }

    public function newUser(Request $request){

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole($request->role);

        return redirect()->back()->with('success','Utilisateur crée avec succces');

    }

    public function updatePassword(Request $request){

        $authenticatedUser = Auth::user();

        if (!(Hash::check($request->oldPass, $authenticatedUser->password))) {

            return redirect()->back()->with("error","Votre ancien mot de passe n'est pas correct.");
        }

        $authenticatedUser->password = $request->password;

        $authenticatedUser->save();

        return redirect()->back()->with("success","Mot de passe modifié avec succes.");

    }

    public function changePasswordPage(){

        return view("admin.change-password");

    }

    public function sessions(SessionSubscuptionDataTable $dataTable)
    {
        return $dataTable->render('admin.sessions');
    }

    public function newSession(Request $request){

        $noParsedSessionStart = explode(" ",explode("-",$request->get('start_end_session'))[0])[0];
        $noParsedSessionEnd = explode(" ",explode("-",$request->get('start_end_session'))[1])[1];

        $noParsedRegistrationStart = explode(" ",explode("-",$request->get('start_end_registratioon'))[0])[0];
        $noParsedRegistrationEnd = explode(" ",explode("-",$request->get('start_end_registration'))[1])[1];

        $parsedSesssionStart = Carbon::parse($noParsedSessionStart)->format('Y-m-d');
        $parsedSessionEnd = Carbon::parse($noParsedSessionEnd)->format('Y-m-d');

        $parsedRegistrationStart = Carbon::parse($noParsedRegistrationStart)->format('Y-m-d');
        $parsedRegistrationEnd = Carbon::parse($noParsedRegistrationEnd)->format('Y-m-d');

        if(self::thereIsActiveSession()){

            $session = new SessionSubscruption();
            $session->start_date = $parsedSesssionStart;
            $session->end_date = $parsedSessionEnd;
            $session->start_registration = $parsedRegistrationStart;
            $session->end_registration = $parsedRegistrationEnd;

            $session->save();

            return redirect()->back()->with("Success","Session créé avec succes");

        }

        return redirect()->back()->with("Error", "Une session active est déjà en cours");

    }

    public function thereIsActiveSession(){

         $sessions = SessionSubscruption::whereIsActive();

         return $sessions->count() > 0;

    }

    public function bank(ImagesDataTable $dataTable){

        return $dataTable->render('admin.images.bank');

    }


    public function uploadCropedImage(Request $request)
    {

        $originalImageName = Carbon::now()->timestamp;
        $imageCryptedName = md5(uniqid());

        $imageOriginalType = explode('/',explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
        $this->storeImageFile($originalImageName, $imageCryptedName, $request->image,null,null,$imageOriginalType,True);

        $imagesTypes = ["webp", "png", "jpg", "jpeg"];
        $imagesSizes = ["720" => "480", "1280" => "720", "1920" => "1080", "3840" => "2160", "7680" => "4320"];

        foreach ($imagesTypes as $type) {

            foreach ($imagesSizes as $width => $height) {

                $this->storeImageFile($originalImageName, $imageCryptedName, $request->image,$width,$height,$type);

            }

        }

        $picture = new Picture();
        $picture->md5 = $imageCryptedName;
        $picture->image_name = $originalImageName;
        $picture->title = $request->title;
        $picture->original_type = $imageOriginalType;
        $picture->save();

        return response()->json(['success' => 'Crop Image Uploaded Successfully']);

    }

    public function storeImageFile($imageOriginalName=null,$imageCryptedName=null,$image=null,$imageWidth=null, $imageHeight=null, $imageType=null, $origin=false){

        $originBasePath = base_path().'/public/storage/upload/'.'origins';
        $resizedBasePath = base_path().'/public/storage/upload/'.$imageWidth.'x'.$imageHeight;

        $origin ? $storePath = $originBasePath : $storePath = $resizedBasePath;

        $firstFolderPath = $storePath.'/'.substr($imageCryptedName,0,1);
        $secondFolderPath = $firstFolderPath.'/'.substr($imageCryptedName,2,1);
        $thirdFolderPath = $secondFolderPath.'/'.substr($imageCryptedName,3,1).'/';

        if(!File::isDirectory($firstFolderPath)){

            File::makeDirectory($firstFolderPath, 0755, true, true);

        }

        if(!File::isDirectory($secondFolderPath)){

            File::makeDirectory($secondFolderPath, 0755, true, true);

        }

        if(!File::isDirectory($thirdFolderPath)){

            File::makeDirectory($thirdFolderPath, 0755, true, true);

        }

        if($origin){

            Image::make($image)->save($thirdFolderPath.$imageOriginalName.'.'.$imageType);

        }
        else{

            Image::make($image)->resize($imageWidth, $imageHeight, function($constraint){

                $constraint->aspectRatio();

            })->save($thirdFolderPath.$imageOriginalName.'.'.$imageType)->encode($imageType, 100);
        }

    }

    public function contents(ContentDataTable $dataTable){

        return $dataTable->render('admin.contents');

    }

    public function edit(Content $id){

        $images = Picture::all();
        return view('admin.content.edit', ['content' => $id, 'images' => $images]);

      //  return view('tes.content.view');



    }


    public function getImagesIds(){

        return DB::table('pictures')->select('id')->get();

    }

    public function attachImagesToContent(Request $request){

        $contentId = $request->content_id;
        $images = $request->images;

        $content = Content::find($contentId);

        foreach($images as $image){

            $picture = Picture::find($image);
            $content->pictures()->attach($picture);

        }

        return response()->json(['status' => 200]);

    }

   public function getImagesFromContent(Request $request){

        $content = Content::find($request->content_id);

   }

   public function updateContent(Request $request){

        $content = Content::find($request->content_id);
        $content->content = $request->content_text;
        $content->update();

        return  response()->json(['status' => 200]);

   }



/*
    public function convertImage($width = null,$height = null, $type = null,$image = null){

        Image::make($image)->fit('720', '480')->save(base_path() . '/img/' . 'test' .'.jpg')->encode('jpg', 80);

    }


    public function getAdaptedHeight($width=null){

        return $width == 320 ? 240 : ($width == 1024 ? 768 : ($width == 1280 ? 1024 : ($width == 1920 ? 1080)));

    }


    public function getImageType($image){



    }
*/
    /*

    3 1er car substr, fonction, répertoire parent => taille
    origins, 1024, 2048, 3770

    */

}
