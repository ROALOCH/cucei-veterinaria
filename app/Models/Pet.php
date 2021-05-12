<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'race',
        'bread',
        'birth_date',
        'color'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeByOwner($query, $user_id)
    {
        return $query->where('user_id','=',$user_id);
    }
}
