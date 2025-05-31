<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    public const UPDATED_AT = null;
    protected $fillable = [
        'user_id',
        'follower_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function follower()
    {
        $this->belongsTo(related: User::class);
    }
}
