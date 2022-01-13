<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeIdentify extends Model
{
    use HasFactory;
    protected $table='type_identify';
    protected $fillable = [
        'id',
        'name'
    ];
}
