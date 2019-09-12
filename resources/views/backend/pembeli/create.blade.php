@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">No ktp</label>
              <input type="text" name="no_ktp" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="alamat" id="" class="form-control" aria-describedby="helpId" required></textarea>
            </div>
            <div class="form-group">
              <label for="">Telepon</label>
              <input type="text" name="telepon" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">HP</label>
              <input type="text" name="hp" id="" class="form-control" aria-describedby="helpId" required>
            </div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('pembeli.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  	
</body>
</html>

@endsection