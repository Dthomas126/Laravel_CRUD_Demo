<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactCreated;

class ContactController extends Controller
{
 


    public function store(Request $request)
    {
        //
     $contact =   Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ]);

        \Mail::to('dthom94@gmail.com')->send(
            new ContactCreated($contact)
        );

        return redirect('/');
    }




}
