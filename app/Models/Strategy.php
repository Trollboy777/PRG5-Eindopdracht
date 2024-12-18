<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    public function user() : \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(User::class);
    }
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'game_version',
        'gym_leader_id',
    ];
    public function gymLeader() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(GymLeader::class);
    }
    public function comments() :\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
