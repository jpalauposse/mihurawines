<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactoController extends Controller
{
    function enviar(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'phone'    =>  'required',
      'email'    =>  'required|email',
      'message'  =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'phone'     =>  $request->phone,
            'email'     =>  $request->email,
            'message'   =>  $request->message
        );

     Mail::to('export@mihurawines.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
