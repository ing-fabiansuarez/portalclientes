<?php

namespace App\Actions\Fortify;

use App\Models\Permissions;
use App\Models\User;
use App\Models\UserPermissions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        //Se modifico la validacion de creacion de usuarios
        //Esta comentado dos campos que son foraneos
        Validator::make($input, [
            'name' => ['required', 'string', 'max:100'],
            'sur_name' => ['required', 'string', 'max:100'],
            /* 'type_identify_id'=>['required'], */
            'identify_number' => ['required', 'numeric', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            /* 'rol_id'=>['required','string'], */
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        //estos campos que estan comentados deberian crear los permisos del usuario apenas se crea
        //sin embargo, al intentar buscar el usuario parece estar bloqueada la ruta y no trae la informacion
        /*$permissions=Permissions::all();
        var_dump($permissions);
        $user=User::where('identify_number','like',$input['identify_number'])->get();
        $user=User::all();
        dd($user);
        foreach($permissions as $permission){
            UserPermissions::create([
                'user_id'=>$user->id,
                'permission_id'=>$permission->id
            ]);
        } */
        return User::create([
            'name' => $input['name'],
            'surname' => $input['sur_name'],
            'type_identify_id' => $input['type_identify_id'],
            'identify_number' => $input['identify_number'],
            'rol_id' => $input['rol_id'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);;
    }
}
