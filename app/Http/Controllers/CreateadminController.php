<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Hash;

class CreateadminController extends Controller
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
      $admin = Admin::all()->toArray();
      $admin = Admin::all();
        return view('admin/createadmin', compact('admin'));
    }

    public function store(Request $request)
    {

        $admin = new Admin();
        $admin->name = $request->input('nama');
        $admin->email = $request->input('email');
        $admin->status = $request->input('status');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();

         $admin = Admin::all();
        return view('admin/createadmin', compact('admin'));

    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin/createadmin')->with('succes', 'pik has been delete');
    }
}
