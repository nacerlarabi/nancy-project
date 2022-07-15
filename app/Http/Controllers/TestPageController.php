<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestPageController extends Controller
{

    public function index()
    {
        return $this->view('pages.test', [
            'prices' => '10'
        ]);
    }

    public function load(Request $request)
    {
        $this->validate($request, [
            'user_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('user_photo')) {
            return back()->with('error','no file to load');
        }

        $destinationPath = public_path('/images');
        $request->user_photo->move($destinationPath, time().'.'.$request->user_photo->getClientOriginalExtension());
        $this->save();

        $this->handleImage(
            $request->user_photo->getClientOriginalExtension(),
            $request->user_photo->getClientOriginalName(),
            $request->user_photo->getSize(),
        );

        return back()->with('success','Image Upload successfully');
    }

    public function handleImage ($type, $originalName, $size)
    {
        event('resizeImage', [$type, $originalName, $size]);

        $image = Image::make($classifiedImg)->encode('webp', 90);
        $image->resize(3000, null, function ($constraint) {
                $constraint->aspectRatio();
            });

        $image->save(public_path('uploads/'  .  $filename . '.webp');

        $image->resize(1440, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save(public_path('uploads/'  .  $filename . '.webp');
    }
}