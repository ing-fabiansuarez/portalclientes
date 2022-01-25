<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horma extends Model
{
    use HasFactory;
    protected $table = 'horma';
    protected $primaryKey = 'id';
    public $incrementing = true;
}
