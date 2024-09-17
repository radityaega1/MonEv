<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CalendarController extends Controller {
    /** Display a listing of the resource. */
    public function __invoke() {
        return view('auth.calendar');
    }

    public function events(): BelongsToMany {
        return $this->belongsToMany(Event::class);
    }
}
