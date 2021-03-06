<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photointro;
use App\Event;
use App\photoevent;
use App\bpp;
use App\charteaf;
use App\runningtext;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Photointro = photointro::all();
        $event = Event::all()->toArray();
        $event = Event::all();
        $Photoevent = photoevent::all()->toArray();
        $Photoevent = photoevent::all();
        $Bpp = bpp::all();
        $Runningtext = runningtext::all();
        return view('layouts/main', compact('Photointro', 'event', 'Photoevent', 'Bpp', 'Runningtext'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
