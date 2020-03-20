<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variabel;
Use App\Pertanyaan;
Use App\TransactionData;
use Illuminate\Support\Facades\DB;

class TransactionDataController extends Controller
{
    public function index()
    {


        $transaction = DB::table('transactiondatas')
        ->join('variabels','transactiondatas.id_variabel', '=', 'variabels.id')
        ->join('pertanyaans','transactiondatas.id_pertanyaan', '=', 'pertanyaans.id')
        ->select(
            'transactiondatas.id',
            'transactiondatas.setuju',
            'transactiondatas.tidak_setuju',
            'transactiondatas.sangat_setuju',
            'transactiondatas.sangat_tidak_setuju',
            'transactiondatas.jumlah_data',
            'variabels.namavariabel',
            'pertanyaans.pertanyaan'
        )
        ->get();
        $variabel = Variabel::all();
        $pertanyaan = Pertanyaan::all();
        return view('transaction',['transaction' => $transaction , 'variabel' => $variabel , 'pertanyaan' => $pertanyaan ]);

    }
    public function store(Request $request)
    {
         $this->validate($request,['variabel' => 'required','pertanyaan' => 'required','jumlahdata' => 'required']);

            TransactionData::create([
                'id_variabel' => $request->variabel,
                'id_pertanyaan' => $request->pertanyaan,
                'jumlah_data' => $request->jumlahdata,
                'sangat_setuju' => $request->sangatsetuju,
                'setuju' => $request->setuju,
                'tidak_setuju' => $request->tidaksetuju,
                'sangat_tidak_setuju' => $request->sangattidaksetuju,

            ]);

            return redirect('/transaction')->with('status', 'Success Added!');

    }
    public function delete($id)
    {
         $transaction = TransactionData::find($id);
         $transaction->delete();
         return redirect('/transaction')->with('status', 'Success Delete!');
    }
    public function edit($id)
    {

         $transaction = TransactionData::find($id);
         $variabel = Variabel::all();
         $pertanyaan = Pertanyaan::all();
         return view('transaction_edit', ['transaction' => $transaction, 'variabel' => $variabel , 'pertanyaan' => $pertanyaan ]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['variabel' => 'required','pertanyaan' => 'required','jumlahdata' => 'required']);

         $transaction = TransactionData::find($id);
         $transaction->id_variabel=$request->variabel;
         $transaction->id_pertanyaan=$request->pertanyaan;
         $transaction->jumlah_data=$request->jumlahdata;
         $transaction->setuju=$request->setuju;
         $transaction->sangat_setuju=$request->sangatsetuju;
         $transaction->tidak_setuju=$request->tidaksetuju;
         $transaction->sangat_tidak_setuju=$request->sangattidaksetuju;
         $transaction->save();
        return redirect('/transaction')->with('status', 'Success Update!');
    }
    public function hasil()
    {

        $transaction = DB::table('transactiondatas')
        ->join('variabels','transactiondatas.id_variabel', '=', 'variabels.id')
        ->join('pertanyaans','transactiondatas.id_pertanyaan', '=', 'pertanyaans.id')
        ->select(
            'transactiondatas.id',
            'transactiondatas.setuju',
            'transactiondatas.tidak_setuju',
            'transactiondatas.sangat_setuju',
            'transactiondatas.sangat_tidak_setuju',
            'transactiondatas.jumlah_data',
            'transactiondatas.id_variabel',
            'variabels.namavariabel',
            'pertanyaans.pertanyaan'
        )
        ->get();
        $variabel = Variabel::all();
        $pertanyaan = Pertanyaan::all();
        return view('hasil',['transaction' => $transaction , 'variabel' => $variabel , 'pertanyaan' => $pertanyaan ]);

    }

}
