<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        /*   dd(Auth::user()->identify_number);
        $users = User::where('identify_number', '!=', Auth::user()->identify_number)->get(); */

        $users = User::all();
        return view('users.index_users', compact('users'));
    }
    public function create()
    {
        $roles = Roles::where('name', '!=', 'Administrador')->get();
        return view('users.create_user');
    }

    public function edit(User $user)
    {
        return view('users.edit_user', compact('user'));
    }
    public function update($user)
    {
        return $user;
    }
}
