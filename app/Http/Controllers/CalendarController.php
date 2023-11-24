<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Fetch events from database

        return view('calendar.index', ['events' => $events]);
    }

    public function fetchEvents(Request $request)
    {
        $events = Event::where('start', '>=', $request->start)
            ->where('end', '<=', $request->end)
            ->get();

        return response()->json($events);
    }
}


