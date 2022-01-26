<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
