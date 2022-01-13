<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\Roles;
use App\Models\TypeIdentify;
use App\Models\User;
use App\Models\UserPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('identify_number', '!=', Auth::user()->identify_number)->get();
        return view('user.index_users', compact('users'));
    }
    public function create()
    {
        $roles = Roles::where('name', '!=', 'Administrador')->get();
        $types_identify = TypeIdentify::all();
        return view('user.create_user', compact('roles', 'types_identify'));
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show_user', compact('user'));
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
        $permissions = Permissions::all();
        $user = User::select('id')->where('identify_number', '=', $request->identify_number)->get();
        foreach ($permissions as $permission) {
            UserPermissions::create([
                'user_id' => $user['0']['id'],
                'permission_id' => $permission->id,
                'state' => 0,
                'by' => Auth::user()->identify_number
            ]);
        }
        return redirect()->route('users.index');
    }
    public function edit(User $user)
    {
        return view('user.edit_user', compact('user'));
    }
    public function update($user)
    {
        return $user;
    }
}
