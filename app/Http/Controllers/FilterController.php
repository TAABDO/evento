<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function searchEvent(Request $request)
    {

        if ($request->text == 0) {
            $events = Event::all();

        } else {
            $events = Event::where('title', 'like', '%'.$request->text.'%')->get();
        }

        return view('search', compact('events'));
    }

    public function FilterEvent($search)
    {

        if ($search == 'AllEvent') {
            $events = Event::where('status', 'confirmed')->get();

            return view('search', compact('events'));
        } else {
            $events = Event::where('status', 'confirmed')->where('category_id', $search)->get();

            return view('search', compact('events'));
        }
    }
}
