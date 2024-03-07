<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getAcceptedEvents()
    {
        $events = Event::where('status', 'confirmed')->get();

        return view('welcome', compact('events'));
    }

    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(EventStoreRequest $request)
    {
        $event = Event::create($request->validated());
        if ($request->hasFile('picture')) {
            $event->addMediaFromRequest('picture')->toMediaCollection('event_pictures');
        }

        return redirect()->route('organizer.index');

    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('Events.update');
    }

    public function update(Request $request, Event $event)
    {
        $event = Event::update($request->validated());
        if ($request->hasFile('picture')) {
            $event->addMediaFromRequest('picture')->toMediaCollection('event_pictures');
        }

        return redirect()->route('organizer.index');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index');
    }
}
