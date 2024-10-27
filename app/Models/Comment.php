<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'user_id', 'strategy_id'];

    public function user() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function strategies() :  \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Strategy::class);
    }
}
