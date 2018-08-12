<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //methode get
    public function getForm(){
      return view('contact');
    }

    //methode post
    public function postForm(ContactRequest $request){

      Mail::send('email_contact', $request->all(), function($message)
      {
        $message->to('lapierre.bruno@gmail.com')->subject('Contact');
      });

      return view('confirm');

    }
}
