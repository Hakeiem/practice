<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('user.index', ['users'=>$users]);
        // $phone = Phone::find(2);
        // return $phone->user;


    }

    public function create()
    {
        $user = User::all();
        return view('user.createUser', ['user'=>$user]);
    }

    public function store(Request $request)
    {
        
        // $phone = new Phone();
        // $phone->user_id = $request->user_id;
        // $phone->phone = $request->phone;
        // $phone->save();
        
        // $user = new Phone();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        // $user->phone()->save($phone);

        // $user = Parent::find($id);
        // $phone = new Phone([

        // ]);
        // $user = new User;
        // $user->name = ['name'=>name];
        // $user->email = $user->email;
        // $user->password = $user->password;
        // $user->save();

        // $phone = new Phone;
        // $phone->user_id = $user->id;
        // $phone->phone = $phone->phone;
        // $phone->save();
        // $user = User::findOrfail(1);
        // $phone = new Phone(['phone'=>$phone]);
        // $user->phone()->save($phone);
        User::create($request->all());
        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::find($id);
        // return view('post.showPost')->with('post', $post);
        return view('user.showUser', ['user'=>$user]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
