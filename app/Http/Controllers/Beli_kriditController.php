<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beli_kridit;
use App\Motor;
use App\Pembeli;

class Beli_kriditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        $pembeli = Pembeli::all();
        $beli_kridit = Beli_kridit::all();
        return view('backend.beli_kridit.index', compact('beli_kridit', 'motor', 'pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motor = Motor::all();
        $pembeli = Pembeli::all();
        $beli_kridit = Beli_kridit::all();
        return view('backend.beli_kridit.create', compact('beli_kridit', 'motor', 'pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beli_kridit = new Beli_kridit();
        $beli_kridit->kridit_kode = $request->kridit_kode;
        $beli_kridit->no_ktp = $request->no_ktp;
        // $beli_kridit->paket_kode = $request->paket_kode;
        $beli_kridit->motor_kode = $request->motor_kode;
        $beli_kridit->kridit_tanggal = $request->kridit_tanggal;


        $beli_kridit->save();
        return redirect()->route('belikridit.index');
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
