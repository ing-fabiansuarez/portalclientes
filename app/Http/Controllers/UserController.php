<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPermissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $permissions = Permissions::all();
        return view('users.edit_user', compact('user', 'permissions'));
    }
    public function store(Request $request)
    {
        /* Validator::make($request, [
            'name' => ['required', 'string', 'max:100'],
            'sur_name' => ['required', 'string', 'max:100'],
            'type_identify_id' => ['required'],
            'identify_number' => ['required', 'numeric', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rol_id' => ['required', 'string'],
        ])->validate(); */

        User::create([
            'name' => $request->name,
            'surname' => $request->sur_name,
            'type_identify_id' => $request->type_identify_id,
            'identify_number' => $request->identify_number,
            'rol_id' => $request->rol_id,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('list_users');
    }
    public function permissions(Request $request)
    {
        UserPermissions::where('user_id', '=', $request->idu)
            ->where('permission_id', '=', $request->idp)->update(['state' => $request->state]);
        if ($request->state == 0) {
            $Estado = 0;
        } else {
            $Estado = 1;
        }

        return response()->json(['var' => '' . $Estado . '']);
    }
    public function update($user)
    {
        return $user;
    }
}
