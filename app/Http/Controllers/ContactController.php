<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(){
         request()->validate([
             'name'=>'required|string',
             'email'=>'required|email',
             'subject'=>'required|string',
             'message'=>'required|string'
        ]);

         Contact::create([
             'name'=>request('name'),
             'email'=>request('email'),
             'subject'=>request('subject'),
             'message'=>request('message')
         ]);

         return back();

    }
}
