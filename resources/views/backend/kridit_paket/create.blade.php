@extends('layouts.backend')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('kriditpaket.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">paket kode</label>
              <input type="text" name="paket_kode" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">paket harga cash</label>
              <input type="text" name="paket_harga_cash" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">paket uang muka</label>
              <input type="text" name="paket_uang_muka" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">paket jumlah cicilan</label>
              <input type="text" name="paket_jumlah_cicilan" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">paket bunga</label>
              <input type="text" name="paket_bunga" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">paket nilai cicilan</label>
              <input type="text" name="paket_nilai_cicilan" id="" class="form-control" aria-describedby="helpId" required>
           
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('kriditpaket.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  	
</body>
</html>

@endsection