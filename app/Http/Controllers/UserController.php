<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\User;
use App\Models\UserPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('identify_number', '!=', Auth::user()->identify_number)->get();
        return view('user.show_users', compact('users'));
    }
    public function create()
    {
        return view('user.create_user');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'surname' => $request->sur_name,
            'type_identify_id' => $request->type_identify_id,
            'identify_number' => $request->identify_number,
            'rol_id' => $request->rol_id,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        //estos campos que estan comentados deberian crear los permisos del usuario apenas se crea
        //sin embargo, al intentar buscar el usuario parece estar bloqueada la ruta y no trae la informacion
        $permissions = Permissions::all();
        $user = User::select('id')->where('identify_number', '=', $request->identify_number)->get();
        echo $user;

        return $user;
        foreach ($permissions as $permission) {
            UserPermissions::create([
                'user_id' => $user['id'],
                'permission_id' => $permission->id,
                'state' => 0,
                'by' => Auth::user()->identify_number
            ]);
        }
        return redirect()->route('users.index');
    }
    public function edit(User $user)
    {
        return view('user.edit_user',compact('user'));
    }
    public function update(User $user){
        return $user;
    }
}
