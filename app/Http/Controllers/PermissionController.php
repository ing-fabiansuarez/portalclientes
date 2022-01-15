<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permissions::all();
        return view('permissions.index_permissions', compact('permissions'));
    }
}
