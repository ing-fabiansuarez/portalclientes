<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /*Funcion index_products: hace el llamado de la vista index_products en la cual se alojan los componentes de 
    livewire creados para la edicion, eliminacion y creacion de los productos*/
    public function index_products()
    {
        return view('administration.index-products');
    }
    /*Funcion index_references: hace el llamado de la vista index_products en la cual se alojan los componentes de 
    livewire creados para la edicion, eliminacion y creacion de los productos*/
    public function index_references()
    {
        return view('administration.index-references');
    }
}
