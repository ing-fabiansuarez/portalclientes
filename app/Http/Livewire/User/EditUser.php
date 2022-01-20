<?php

namespace App\Http\Livewire\User;

use App\Models\Phones;
use App\Models\User;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Null_;

class EditUser extends Component
{
    /* open: Activa o desactiva el modal
    las variables number_phone y id_phone se crean para realizar la actualizacion de dichos campos en la BBDD
    */
    public $number_phone1, $id_phone1;
    public $number_phone2, $id_phone2;
    public $open = false;
    public $user;

    /*Funcion rules: se ingresan todas las reglas de verificacion para actualizar un usuario */
    protected function rules()
    {
        return [
            'user.name' => ['required', 'string', 'max:100'],
            'user.surname' => ['required', 'string', 'max:100'],
            'user.type_identify_id' => ['required'],
            'user.identify_number' =>  ['required', 'numeric', 'unique:users,identify_number,' . $this->user->id],
            'user.rol_id' => 'required',
            'user.email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->user->email],
            'number_phone1' => ['required', 'numeric', 'digits:10'],
            'number_phone2' => ['nullable']
        ];
    }
    /*Funcion mount: recibe los datos enviados desde la vista y valida si el usuario tiene numeros inscritos */
    public function mount($id_user)
    {
        $this->user = User::find($id_user);
        $this->phones = Phones::where('user_id', '=', $id_user)->get();
        if ($this->phones->count() == 0) {
            $this->number_phone1 = '';
            $this->number_phone2 = '';
        } else {
            if ($this->phones->count() == 1) {
                $this->number_phone1 = $this->phones['0']->number;
                $this->id_phone1 = $this->phones['0']->id;
            } else {
                $this->number_phone1 = $this->phones['0']->number;
                $this->id_phone1 = $this->phones['0']->id;
                $this->number_phone2 = $this->phones['1']->number;
                $this->id_phone2 = $this->phones['1']->id;
            }
        }
    }

    //Renderiza la vista user.edit-user
    public function render()
    {
        return view('livewire.user.edit-user');
    }

    /*Funcion save: Valida los datos y almacena la informacion modificada en el modelo, ademas
    tambien verifica los numeros de telefono y los actualiza o crea, segun sea el caso , posteriormente cierra el modal y
    renderiza el componente*/
    public function save()
    {
        $this->validate();
        $this->user->save();
        $query = Phones::where('user_id', '=', $this->user->id)->get();
        if (count($query) == 0) {
            if (empty($this->number_phone2)) {
                Phones::create([
                    'number' => $this->number_phone1,
                    'user_id' => $this->user->id
                ]);
            } else {
                Phones::create([
                    'number' => $this->number_phone1,
                    'user_id' => $this->user->id
                ]);
                Phones::create([
                    'number' => $this->number_phone2,
                    'user_id' => $this->user->id
                ]);
            }
        } else {
            if ($this->id_phone2 == null and empty($this->number_phone2) == 0) {
                Phones::create([
                    'number' => $this->number_phone2,
                    'user_id' => $this->user->id
                ]);
            } else {
                if (empty($this->number_phone2)) {
                    Phones::where('user_id', '=', $this->user->id)
                        ->where('id', '=', $this->id_phone1)
                        ->update([
                            'number' => $this->number_phone1
                        ]);
                    Phones::where('user_id', '=', $this->user->id)
                        ->where('id', '=', $this->id_phone2)
                        ->update([
                            'number' => ''
                        ]);
                } else {
                    Phones::where('user_id', '=', $this->user->id)
                        ->where('id', '=', $this->id_phone1)
                        ->update([
                            'number' => $this->number_phone1
                        ]);
                    Phones::where('user_id', '=', $this->user->id)
                        ->where('id', '=', $this->id_phone2)
                        ->update([
                            'number' => $this->number_phone2
                        ]);
                }
            }
        }
        $this->reset(['open']);
        $this->emit('render');
    }
}
