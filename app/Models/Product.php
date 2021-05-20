<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use softDeletes;

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
