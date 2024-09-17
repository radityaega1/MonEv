<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventIndexController extends Controller {
    /** Handle the incoming request. */
    public function __invoke() {
        $events = Event::with('province', 'tags')->orderBy('created_at', 'desc')->paginate(12);
        return view('auth.eventIndex', compact('events'));
    }
}
