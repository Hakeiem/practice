<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function create() {
        $phone = Phone::all();
        return view('user.numberAssign', ['phone'=>$phone]);
    }

    public function store(Request $request) {
        Phone::create($request->all());
        return redirect('/users');
    }
}
