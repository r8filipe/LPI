<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;

class EventsController extends Controller
{
    //
    public function getEvents()
    {
        $events = Event::all();
        return view('events', ['events' => $events]);
    }
    public function getMapEvents()
    {
        $events = Event::all();
        return view('eventsmaps', ['events' => $events]);
    }
}
