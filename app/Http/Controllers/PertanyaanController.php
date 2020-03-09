<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {

        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan', ['pertanyaan' => $pertanyaan]);
    }
    public function store(Request $request)
    {
        $this->validate($request,['pertanyaan' => 'required']);

        Pertanyaan::create(['pertanyaan' => $request->pertanyaan]);

        return redirect('/pertanyaan')->with('status', 'Success Added!');
    }
    public function delete($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect('/pertanyaan')->with('status', 'Success Delete!');
    }
    public function edit($id)
    {

        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan_edit', ['pertanyaan' => $pertanyaan]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['pertanyaan'=>'required']);

        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->pertanyaan=$request->pertanyaan;
        $pertanyaan->save();
        return redirect('/pertanyaan')->with('status', 'Success Update!');
    }
}
