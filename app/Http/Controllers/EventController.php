<?php

namespace App\Http\Controllers;

use App\Http\Requests\Editor\CreateEventRequest;
use App\Http\Requests\Editor\UpdateEventRequest;
use App\Models\Province;
use App\Models\District;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EventController extends Controller {
    /** Display a listing of the resource. */
    public function index(): View {
        $events = Event::with('province')->get();
        return view('editor.events.index', compact('events'));
    }

    /** Show the form for creating a new resource. */
    public function create(): View {
        $provinces = Province::all();
        $districts = District::all();
        $tags = Tag::all();
        return view('editor.events.create', compact('provinces','districts', 'tags'));
    }

    public function getKabupaten($id) {
        if (!auth()->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        // Ambil distrik berdasarkan ID provinsi
        $districts   = District::where('province_id', $id)->get();
        // Kembalikan sebagai JSON
        return response()->json($districts);
    }

    /** Store a newly created resource in storage. */
    public function store(CreateEventRequest $request): RedirectResponse {
        if ($request->hasFile('image')) {
            $data = $request->validated([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $data['image']       = $request->file('image')->store('events');
            $data['editor_id']   = auth()->id();
            $data['title']       = $request->title;
            $data['province_id'] = $request->province_id;
            $data['district_id'] = $request->district_id;
            $data['address']     = $request->address;
            $data['start_date']  = $request->start_date;
            $data['end_date']    = $request->end_date;
            $data['start_time']  = $request->start_time;
            $data['end_time']    = $request->end_time;
            $data['description'] = $request->description;
            $data['category']    = Str::slug($request->title);
            $event = Event::create($data);
            $event->tags()->attach($request->tags);
            return to_route('events');
        } else {
            return back();
        }
    }

        /** Show the form for editing the specified resource. */
        public function edit(Event $event): View {
            $provinces = Province::all();
            $districts = District::all();
            $tags = Tag::all();
            return view('editor.events.edit', compact('provinces', 'districts', 'tags', 'event'));
        }

//    /** Update the specified resource in storage. */
//    public function update(UpdateEventRequest $request, Event $event): RedirectResponse {
//        $data = $request->validated();
//        if ($request->hasFile('image')) {
//            Storage::delete($event->image);
//            $data['image'] = Storage::putFile('event', $request->file('image'));
//        }
//
//        $data['category'] = Str::slug($request->title);
//        $event->update($data);
//        $event->tags()->sync($request->tags);
//        return to_route('editor.event')->with('status');
//    }

    /** Remove the specified resource from storage. */
    public function destroy(Event $event): RedirectResponse {
        Storage::delete($event->image);
        $event->delete();
        $event->tags()->detach();
        return to_route('events');
    }
}
