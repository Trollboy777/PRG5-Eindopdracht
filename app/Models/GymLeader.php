<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymLeader extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

     public function strategies() : \Illuminate\Database\Eloquent\Relations\HasMany {
         return $this->hasMany(Strategy::class);
     }

}
