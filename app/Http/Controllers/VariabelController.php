<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variabel;

class VariabelController extends Controller
{
    public function index()
    {
        $variabel = Variabel::all();
        return view('variabel', ['variabel' => $variabel]);
    }
    public function store(Request $request)
    {
        $this->validate($request,['namavariabel' => 'required']);

        Variabel::create([
            'kodevariabel' => $request->kodevariabel,
            'namavariabel' => $request->namavariabel

            ]);

        return redirect('/')->with('status', 'Success Added!');
    }
    public function delete($id)
    {
        $variabel = Variabel::find($id);
        $variabel->delete();
        return redirect('/')->with('status', 'Success Delete!');
    }
    public function edit($id)
    {

        $variabel = Variabel::find($id);
        return view('variabel_edit', ['variabel' => $variabel]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['namavariabel'=>'required']);

        $variabel = Variabel::find($id);
        $variabel->kodevariabel=$request->kodevariabel;
        $variabel->namavariabel=$request->namavariabel;
        $variabel->save();
        return redirect('/')->with('status', 'Success Update!');
    }

}
