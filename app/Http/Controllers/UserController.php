<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function list()
    {
        $users=User::all();
        return view('welcome',compact('users'));
    }
    public function index()
    {
        
        return view('create');
    }
    public function store(Request $request)
    {
       // dd($request);
        
        User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        
    ]);
    alert('You clicked the button!');
    return redirect()->back();
    }
}
