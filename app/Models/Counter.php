<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;


class Counter extends Model
{

    protected $fillable = ['count', 'user_id', 'updated', 'level', 'xp', 'coins', 'clickPower'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
