<?php

namespace App\Http\Controllers\Editor\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\View\View;

class EditorEventIndexController extends Controller {
    /** Handle the incoming request. */
    public function __invoke() {
        $events = Event::with('province', 'tags')->orderBy('created_at', 'desc')->paginate(12);
        return view('editor.events.eventIndex', compact('events'));
    }
}
