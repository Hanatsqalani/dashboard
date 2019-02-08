<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\runningtext;

class RunningtextController extends Controller
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
        $Runningtext = runningtext::all()->toArray();
        $Runningtext = runningtext::all();
        return view('admin/runningtext', compact('Runningtext'));
    }

    public function store(Request $request)
    {

        $Runningtext = new runningtext();
        $Runningtext->text = $request->input('text');
        $Runningtext->save();

         $Runningtext = runningtext::all();
        return view('admin/runningtext', compact('Runningtext'));
      
    }

    public function destroy($id)
    {
        $Runningtext = runningtext::find($id);
        $Runningtext->delete();
        return redirect('admin/runningtext')->with('succes', 'text has been delete');
    }

    public function edit($id)
    {
        $Runningtext = runningtext::find($id);
        return view ('admin/runningtext', compact('Runningtext', 'id'));
    }

    public function update(Request $request)
    {
      $Runningtext = \DB::table('runningtexts')->select('id')->where('id', $request->input('id'));
      $Runningtext->update(['text' => $request->input('text')]);
      return back()->with('success', 'text Berhasil Diubah');
    }


}
