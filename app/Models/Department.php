<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departament';
    protected $primaryKey = 'id_departament';

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
