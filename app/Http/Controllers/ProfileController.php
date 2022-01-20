<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /*Funcion index: hace el llamado de la vista update-profile-information-client en la cual se alojan los componentes de 
    livewire creados para la edicion del perfil de usuario */
    public function index()
    {
        return view('profile.update-profile-information-client');
    }
}
