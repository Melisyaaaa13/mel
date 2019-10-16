<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bayar_cicilan;
use App\Beli_kridit;

class Bayar_cicilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beli_kridit = Beli_kridit::all();
        $bayar_cicilan = Bayar_cicilan::all();
        return view('backend.bayar_cicilan.index', compact('bayar_cicilan', 'beli_kridit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beli_kridit = Beli_kridit::all();
        $bayar_cicilan = Bayar_cicilan::all();
        return view('backend.bayar_cicilan.create', compact('bayar_cicilan', 'beli_kridit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bayar_cicilan = new Bayar_cicilan();
        $bayar_cicilan->cicilan_kode = $request->cicilan_kode;
        $bayar_cicilan->kridit_kode = $request->kridit_kode;
        $bayar_cicilan->cicilan_tanggal = $request->cicilan_tanggal;
        $bayar_cicilan->cicilan_jumlah = $request->cicilan_jumlah;
        $bayar_cicilan->cicilan_ke = $request->cicilan_ke;
        $bayar_cicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
        $bayar_cicilan->save();
        return redirect()->route('kriditpaket.index');
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
