<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        $events=Event::All();
        return view('Organizer.dashorga',compact('events'));
    }

    public function create ()
    {
        
    }


}
