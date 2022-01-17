<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'number',
        'user_id'
    ];
    public $timestamps = false;
    public static function NumberPhones($id_user){
        $phones=Phones::where('user_id', '=', $id_user)->get();
        return $phones;
    }
}
