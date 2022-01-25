<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'type_identify_id',
        'identify_number',
        'rol_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public static function UserId($document, $type_document)
    {
        $idUser = User::select('id')->where('identify_number', '=', $document)
            ->where('type_identify_id', '=', $type_document)->first();
        return ($idUser);
    }



    //FABIAN
    public function Cart()
    {
        $price = 0;
        $quantity_total = 0;
        foreach ($items = Cart::where('user_id', $this->id)->where('sold_out_cart', false)->get() as $item) {
            $price += ($item->quantity_cart * $item->reference->product->price()['cost']);
            $quantity_total += $item->quantity_cart;
        }
        return [
            'items' => $items,
            'price_products' => $price,
            'quantity_total' => $quantity_total
        ];
    }
}
