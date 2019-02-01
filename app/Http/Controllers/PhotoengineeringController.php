<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineering;
use App\photoengineering;
use App\engineerprestasi;

class PhotoengineeringController extends Controller
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
        $engineering = Engineering::all()->toArray();
        $engineering = Engineering::all();
        $Photoengineering = photoengineering::all()->toArray();
        $Photoengineering = photoengineering::all();
        $Engineerprestasi = engineerprestasi::all()->toArray();
        $Engineerprestasi = engineerprestasi::all();
        return view('admin/engineering', compact('engineering', 'Photoengineering', 'Engineerprestasi'));
    }

    public function store(Request $request)
    {
        $Photoengineering = new photoengineering;

        $Photoengineering->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photoengineering/', $filename);
            $Photoengineering->filename = $filename;
        } else{
            return $request;
            
        }
        $Photoengineering->save();

        $engineering = Engineering::all()->toArray();
        $engineering = Engineering::all();
        $Photoengineering = photoengineering::all()->toArray();
        $Photoengineering = photoengineering::all();
        $Engineerprestasi = engineerprestasi::all()->toArray();
        $Engineerprestasi = engineerprestasi::all();
        return view('admin/engineering', compact('engineering', 'Photoengineering', 'Engineerprestasi'));
    }

    public function destroy($id)
    {
        $Photoengineering = photoengineering::find($id);
        $Photoengineering->delete();
        return redirect('admin/engineering')->with('succes', 'fotoengineering has been delete');
    }
}