<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request  $request)
    {
        dd($request->all());
    }
}
