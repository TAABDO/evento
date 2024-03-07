<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

public function index()
{
    $events = Event::all();
    return view('', compact('events'));
}

}
