<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name_product',
        'active',
        'score',
        'category_id'
    ];
    public $incrementing = true;

    public static function NameCategory($id_category)
    {
        $category = Category::select('name')->where('id', $id_category)->first();
        return $category->name;
    }

    //relaicon uno a uno polimorfinca
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function references()
    {
        return $this->hasMany(Reference::class, 'product_id', 'id');
    }

    public function hormas()
    {
        return $this->hasMany(Horma::class);
    }

    public function sizes()
    {
        return $this->hasMany(Sizes::class);
    }

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }
    //trae el precio segun el rol
    public function price()
    {
        return Price::where('role_id', Auth::user()->rol_id)->where('product_id', $this->id)->first();
    }
}
