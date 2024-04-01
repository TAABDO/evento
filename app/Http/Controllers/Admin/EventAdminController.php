<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventAdminRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventAdminController extends Controller
{
    // public function index()
    // {
    //     $events = Event::all();
    //     return view('Admin.dashadmin.status', compact('events'));
    // }

    // public function index()
    // {
    //     $events = Event::all();
    //     // $EventStatuses = Event::distinct()->pluck('status')->toArray();
    //     return view('Admin.dashadmin',compact('events'));
    // }

    public function edit($id)
    {
         $event = Event::findOrFail($id);

        $statuses = ['cancelled','confirmed','pending'];

        return view('Admin.dashadmin.status', compact('event', 'statuses'));
    }


    public function update(EventAdminRequest $request, $id)
    {
        $event = Event::findOrFail($id);

        $validatedData = $request->validated();

        $event->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'Event status updated successfully.');
    }
}
