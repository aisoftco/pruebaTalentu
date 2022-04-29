<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Offer extends Model
{
    public const STATUS_ACTIVE = true;
    public const STATUS_INACTIVE = false;

    protected $fillable = ['name', 'user_id', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
