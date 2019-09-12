@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
        <form action="{{ route('kridit_paket.update', $kridit_paket->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">paket kode</label>
              <input type="text" name="paket_kode" id="" class="form-control" aria-describedby="helpId" value="{{$kriditpaket->paket_kode}}">
            </div>
            <div class="form-group">
              <label for="">paket harga cash</label>
              <input type="text" name="paket_harga_cash" class="form-control">{{$kriditpaket->paket_harga_cash}}</input>
            </div>
            <div class="form-group">
              <label for="">paket uang muka</label>
              <input type="text" name="paket_uang_muka" class="form-control">{{$kriditpaket->motor_typpaket_uang_mukae}}</input>
            </div>
            <div class="form-group">
              <label for="">paket jumlah cicilan</label>
              <input type="text" name="paket_jumlah_cicilan" class="form-control">{{$kriditpaket->paket_jumlah_cicilan}}</input>
            </div>
            <div class="form-group">
              <label for="">paket bunga</label>
              <input type="text" name="paket_bunga" class="form-control">{{$kriditpaket->paket_bunga}}</input>
            </div>
            <div class="form-group">
              <label for="">paket nilai cicilan</label>
              <input type="text" name="paket_nilai_cicilan" class="form-control">{{$kriditpaket->paket_nilai_cicilan}}</input>
            </div>
            <button type="submit" class="btn btn-md btn-info">Simpan</button>
            <a name="" id="" class="btn btn-md btn-warning" href="{{route('kriditpaket.index')}}" role="button">Kembali</a>
        </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
      @endsection