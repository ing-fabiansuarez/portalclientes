<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'reference_id',
        'size_id',
        'horma_id',
        'observation_id',
        'quantity_cart',
        'user_id',
        'sold_out_cart',
    ];

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }

    public function size()
    {
        return $this->belongsTo(Sizes::class);
    }

    public function horma()
    {
        return $this->belongsTo(Horma::class);
    }

    public function observation()
    {
        return $this->belongsTo(Observation::class);
    }
}
