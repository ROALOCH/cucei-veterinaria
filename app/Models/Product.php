<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'type'
    ];

    public function scopeByType($query, $type) {
        return $query->where('type','=', $type);
    }



    public function scopeOrderDesc($query) {
        return $query->orderByDesc('id');
    }

}
