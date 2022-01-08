<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        return view('user.user_list');
    }
    public function create(){
        return "Hola";
    }
}
