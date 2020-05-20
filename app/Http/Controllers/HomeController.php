<?php

namespace App\Http\Controllers;

use App\receive;
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
        $newReceive = new receive();
        $newReceive->name = $request->name;
        $newReceive->currentaddress = $request->currentaddress;
        $newReceive->term = $request->term;
        $newReceive->mobile = $request->mobile;
        $newReceive->save();
        return redirect()->route('towel');
    }

    public function usage()
    {
        $usage = receive::paginate();
        return view('towel', compact('usage'));
    }
}
