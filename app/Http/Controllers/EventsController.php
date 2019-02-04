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
        $event = Event::all()->toArray();
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

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('admin/event')->with('succes', 'event has been delete');
    }

     public function edit($id)
    {
        $event = Event::find($id);
        return view ('admin/event', compact('event', 'id'));
    }

    public function update(Request $request)
    {
      $event = \DB::table('events')->select('id')->where('id', $request->input('id'));
      $event->update(['tanggal' => $request->input('tanggalevent')]);
      $event->update(['waktu' => $request->input('waktuevent')]);
      $event->update(['lokasi' => $request->input('tempatevent')]);
      $event->update(['tema' => $request->input('temaevent')]);
      $event->update(['detail' => $request->input('detailevent')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

}
