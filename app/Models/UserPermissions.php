<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermissions extends Model
{
    use HasFactory;
    protected $table = 'user_has_permissions';
    protected $fillable = [
        'user_id',
        'permission_id',
        'by',
        'state'
    ];
}
