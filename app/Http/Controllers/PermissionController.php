<?php

namespace App\Http\Controllers;

use App\Models\Permissions;


class PermissionController extends Controller
{
    /*Funcion index: hace el llamado de la vista index_permissions en la cual se alojan los componentes de 
    livewire creados para la edicion, eliminacion y creacion de permisos*/
    public function index()
    {
        return view('permissions.index_permissions');
    }
}
