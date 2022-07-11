<?php

namespace App\Http\Controllers;

use App\DataTables\RolesDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use App\DataTables\RegistrationDataTable;
use App\DataTables\UserDataTable;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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



}
