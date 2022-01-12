<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $search;
    public $sort='id';
    public $direction='desc';
    public function render()
    {
        $users=User::where('surname','like','%'.$this->search.'%')
        ->orWhere('identify_number','like','%'.$this->search.'%')
        ->orWhere('rol_id','like','%'.$this->search.'%')
        ->orWhere('name','like','%'.$this->search.'%')
        ->orderBy($this->sort,$this->direction)->get();
        /* $users=User::all(); */
        return view('livewire.show-users',compact('users'));
    }
    public function order($sort){
        if($this->sort==$sort){
            if($this->direction=='desc'){
                $this->direction='asc';
            }else{
                $this->direction='desc';
            }
        }else{
            $this->sort=$sort;
            $this->direction='asc';
        }
    }
}
