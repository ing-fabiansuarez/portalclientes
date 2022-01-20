<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Permissions;
use App\Models\Roles;
use App\Models\Phones;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPermissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use PasswordValidationRules;

    //Redirije a la vista de index que en su content posee los componentes de livewire
    public function index()
    {
        return view('users.index_users');
    }
    //Redirige a la vista crear
    public function create()
    {
        return view('users.create_user');
    }
    //Este metodo recibe un request del formulario create, valida la informacion y la almacena
    //en la tabla users, ademas, tambien guarda los phones del usuario validando si solo se digito uno solo o los dos
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'sur_name' => ['required', 'string', 'max:100'],
            'id_type_identification' => ['required'],
            'identify_number' => ['required', 'numeric', 'unique:users'],
            'number_phone' => ['required', 'numeric', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'id_type_rol' => ['required']
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->sur_name,
            'type_identify_id' => $request->id_type_identification,
            'identify_number' => $request->identify_number,
            'rol_id' => $request->id_type_rol,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $idUser = User::UserId($request->identify_number, $request->id_type_identification);
        if (empty($request->number_phone2i)) {
            Phones::create([
                'number' => $request->number_phone,
                'user_id' => $idUser->id
            ]);
        } else {
            Phones::create([
                'number' => $request->number_phone,
                'user_id' => $idUser->id
            ]);
            Phones::create([
                'number' => $request->number_phone2i,
                'user_id' => $idUser->id
            ]);
        }
        return redirect()->route('list_users');
    }

    //Funcion permissions: Es llamada a traves de js y crea o actualiza los permisos de usuarios
    public function permissions(Request $request)
    {
        if (UserPermissions::where('user_id', '=', $request->idu)
            ->where('permission_id', '=', $request->idp)->get()->count()
        ) {
            UserPermissions::where('user_id', '=', $request->idu)
                ->where('permission_id', '=', $request->idp)
                ->update(['state' => $request->state]);
        } else {
            UserPermissions::create([
                'user_id' => $request->idu,
                'permission_id' => $request->idp,
                'state' => $request->state,
                'by' => Auth::user()->id
            ]);
        }
        if ($request->state == 0) {
            $Estado = 0;
        } else {
            $Estado = 1;
        }
        return response()->json(['var' => '' . $Estado . '']);
    }
}
