<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event = Event::all();
        return view('admin/event', compact('event'));
    }

    public function store(Request $request)
    {

        $event = new Event();
        $event->tanggal = $request->input('tanggalevent');
        $event->waktu = $request->input('waktuevent');
        $event->lokasi = $request->input('tempatevent');
        $event->tema = $request->input('temaevent');
        $event->detail = $request->input('detailevent');
        $event->save();

         $event = Event::all();
        return view('admin/event', compact('event'));
      
    }

}
