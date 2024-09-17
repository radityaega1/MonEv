<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model {
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function districts(): HasMany {
        return $this->hasMany(District::class);
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class);
    }

}
