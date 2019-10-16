<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beli_cash;
use App\Motor;

class Bayar_cashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayar_cash = Beli_cash::orderBy('created_at', 'desc');
        return view('backend.bayar_cash.index', compact('bayar_cash'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bayar_cash = Beli_cash::all();
        $motor = Motor::all();
        return view('backend.bayar_cash.create', compact('bayar_cash', 'motor'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bayar_cash = new Beli_cash();
        $bayar_cash->kode = $request->kode;
        $bayar_cash->no_ktp = $request->no_ktp;
        $bayar_cash->motor_kode = $request->motor_kode;
        $bayar_cash->tanggal = $request->tanggal;
        $bayar_cash->bayar = $request->bayar;
        $bayar_cash->save();

        return redirect()->route('bayar_cash.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bayar_cash = bayar_cash::findOrFail($id);
        return view('backend.bayar_cash.show', compact('bayar_cash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bayar_cash = bayar_cash::findOrFail($id);
        return view('backend.bayar_cash.edit', compact('bayar_cash'));
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
        $bayar_cash = Beli_cash::findOrFail($id);
        $bayar_cash->kode = $request->kode;
        $bayar_cash->no_ktp = $request->no_ktp;
        $bayar_cash->motor_kode = $request->motor_kode;
        $bayar_cash->tanggal = $request->tanggal;
        $bayar_cash->bayar = $request->bayar;
        $bayar_cash->save();

        return redirect()->route('bayar_cash.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bayar_cash = bayar_cash::findOrFail($id)->delete();
        return redirect()->route('bayar_cash.index');
    }
}
