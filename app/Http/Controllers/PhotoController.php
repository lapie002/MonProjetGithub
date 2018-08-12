<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\ImagesRequests;

class PhotoController extends Controller
{
    public function getForm(){

        return view('photo');

    }

    public function postForm(ImagesRequests $request){

        $image = $request->file('image');

        if($image->isValide()){

              $chemin = config('images.path');

              $extension = $image->getClientOriginalExtension();

              do {
                $nom = str_random(10) . '.' . $extension;
              } while (file_exists($chemin,$nom));

              if ($image->move($chemin,$nom)) {
                return view('photo_ok');
              }
        }

        return redirect('photo')->with('error','Désolé mais votre image ne peut pas etre envoyé !');

    }

}
