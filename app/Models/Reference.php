<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $table = 'references';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'num_ref',
        'product_id',
        'name_ref',
        'active_ref'
    ];


    //relaicon uno a uno polimorfinca
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function hormas()
    {
        return $this->product->hormas;
    }

    public function observations()
    {
        return $this->product->observations;
    }

    public function sizes()
    {
        return $this->product->sizes;
    }
}
