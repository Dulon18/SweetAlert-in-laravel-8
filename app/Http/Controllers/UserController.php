<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function list()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('create');
    }
}
