@extends('layouts.backend')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
        <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">No ktp</label>
              <input type="text" name="no_ktp" id="no_ktp" class="form-control" aria-describedby="helpId" value="{{$pembeli->no_ktp}}">
            </div>
            <div class="form-group">
              <label for="">Nama</label>
              <input name="nama" type="text" class="form-control" value="{{$pembeli->nama}}"></input>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input name="alamat" type="text" class="form-control" value="{{$pembeli->alamat}}"></input>
            </div>
            <div class="form-group">
              <label for="">telepon</label>
              <input type="numeric" name="telepon" cols="30" rows="5" class="form-control"value="{{$pembeli->telepon}}"></input>
            </div>
            <div class="form-group">
              <label for="">HP</label>
              <input type="text" name="hp" cols="30" rows="5" class="form-control" value="{{$pembeli->hp}}"></input>
            </div>
            <button type="submit" class="btn btn-md btn-info">Simpan</button>
            <a name="" id="" class="btn btn-md btn-warning" href="{{route('pembeli.index')}}" role="button">Kembali</a>
        </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
      @endsection