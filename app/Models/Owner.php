<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class Owner extends Model
{
    use HasRoles;
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
