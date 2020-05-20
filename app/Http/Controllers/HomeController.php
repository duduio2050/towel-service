<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function towel()
    {
        return view('towel');
    }

    public function receive(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'currentaddress' => 'required',
            'term' => 'required',
            'mobile' => 'required'
        ]);


    }
}
