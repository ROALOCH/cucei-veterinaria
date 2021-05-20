<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pet_id',
        'scheduled_for'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pet(){
        return $this->belongsTo(Pet::class)->withTrashed();
    }

    public function scopeByUser($query, $user_id)
    {
        return $query->where('user_id', '=', $user_id);
    }
}
