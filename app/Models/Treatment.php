<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treatment extends Model
{
    protected $table = 'treatments';

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    protected $casts = [
        'price' => \App\Casts\MoneyCast::class,
    ];
}