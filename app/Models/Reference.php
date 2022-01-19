<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $table = 'references';
    protected $primaryKey = 'id';


    //relaicon uno a uno polimorfinca

    public function image()
    {
        return $this->morphOne(Images::class, 'imageable');
    }
}
