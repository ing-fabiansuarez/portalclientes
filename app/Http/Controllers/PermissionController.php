<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions=Permissions::all();
        return view('permissions.index_permissions', compact('permissions'));
    }
    public function create()
    {
        return view('users.create_user');
    }
    public function store(Request $request)
    {
        /* Permissions::create([
            'name' => $request->name,
            'description'=>$request->description
        ]); */
        /* $permissions = Permissions::all();
        $user = User::select('id')->where('identify_number', '=', $request->identify_number)->get();
        foreach ($permissions as $permission) {
            UserPermissions::create([
                'user_id' => $user['0']['id'],
                'permission_id' => $permission->id,
                'state' => 0,
                'by' => Auth::user()->identify_number
            ]);
        } */
        return redirect()->route('users.index');
    }
}
