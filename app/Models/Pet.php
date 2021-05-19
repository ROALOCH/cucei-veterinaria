<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use softDeletes;

    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'race',
        'breed',
        'birth_date',
        'color'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeByOwner($query, $user_id)
    {
        return $query->where('user_id','=',$user_id);
    }
}
