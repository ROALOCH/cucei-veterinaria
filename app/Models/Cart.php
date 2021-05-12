<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function scopeByUser($query, $user_id) {
        return $query->where('user_id', '=', $user_id);
    }

    public function getTotalAttribute(){
        return $this->quantity * $this->product->price;
    }

    public static function total(Collection $carts){
        $total = 0.0;
        foreach ($carts as $cart) {
            $total += $cart->total;
        }
        return $total;
    }
}
