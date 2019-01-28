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
        return view('admin/event');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->waktu = $request->waktu;
        $event->lokasi = $request->lokasi;
        $event->tema = $request->tema;
        $event->detail = $request->detail;
        $event->save();
        echo "Data Berhasil Disimpan";
    }
}
