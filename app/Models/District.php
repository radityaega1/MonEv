<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model {
    use HasFactory;

    protected $fillable = [
        'province_id',
        'name',
    ];

    public function province(): BelongsTo {
        return $this->belongsTo(Province::class);
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class);
    }
}
