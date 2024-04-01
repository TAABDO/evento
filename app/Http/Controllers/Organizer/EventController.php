<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Models\Category;
use App\Models\Event;

class EventController extends Controller
{
    public function getAcceptedEvents()
    {

        $categories = Category::all();
                // $experiences = Experience::where('user_id', $condidate->id)->get();

        $events = Event::with('category')->where('status', 'confirmed')->get();

        return view('welcome', compact('events','categories'));
    }

    public function index()
    {
        $events = Event::All();
        // $user=Auth::user();
        // $events = Event::where('user_id', $condidate->id)->get();

        $isAutoValues = Event::distinct('isAuto')->pluck('isAuto')->toArray();

        return view('Organizer.dashorga', compact('events','isAutoValues'));
    }

    public function create()
    {
        $categories = Category::All();
        return view('Organizer.events.create', compact('categories'));
    }

    public function store(EventStoreRequest $request)
    {

        $validatedData = $request->validated();

        $event = Event::create($validatedData);

        if ($request->hasFile('picture')) {

            $event->addMediaFromRequest('picture')->toMediaCollection('picture');
        }

        return redirect()->route('event.create')->with('success', 'Event created successfully!');
    }

    public function show($id)
    {

        $event = Event::with('category')->findOrFail($id);
        $events = Event::All();

        return view('Organizer.Events.Details', compact('events', 'event'));
    }

    public function edit(Event $event)
    {
        $category = Category::All();
        $isAutoValues = Event::distinct('isAuto')->pluck('isAuto')->toArray();

        return view('Organizer.events.update', compact('event', 'category','isAutoValues'));
    }

    public function update(EventStoreRequest $request, Event $event)
    {
        $event->update($request->validated());

        if ($request->hasFile('picture')) {
            $event->addMediaFromRequest('picture')->toMediaCollection('picture');
        }

        return redirect()->route('event.index');
    }

    public function destroy($id)
    {   $event=Event::find($id);
        $event->delete();

        return redirect()->route('event.index');
    }
    // public function destroy($id)
    // {
    //     $category = Category::find($id);
    //     $category->delete();

    //     return redirect()->back();
    // }
    // public function searchByTitle(EventStoreRequest $request)
    // {

    // $query = $request->input('query');

    // $events = Event::where('title', 'like', "%$query%")->get();

    // return response()->json($events);

    // }



}
