<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Event extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'image',
        'address',
        'editor_id',
        'province_id',
        'district_id',
        'city_id',
    ];

    protected $casts = [
        'start_date' => 'date: d M Y',
        'end_date'   => 'date: d M Y',
    ];

    public function editor(): BelongsTo {
        return $this->belongsTo(Editor::class);
    }

    public function province(): BelongsTo {
        return $this->belongsTo(Province::class);
    }

    public function district(): BelongsTo {
        return $this->belongsTo(District::class);
    }
    public function city(): BelongsTo {
        return $this->belongsTo(City::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function likes(): HasMany {
        return $this->hasMany(Like::class);
    }

    public function savedEvents(): HasMany {
        return $this->hasMany(SavedEvent::class);
    }

    public function attendings(): HasMany {
        return $this->hasMany(Attending::class);
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tag) {
        return $this->tags->contains($tag);
    }
}
