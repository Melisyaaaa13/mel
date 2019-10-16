@extends('layouts.backend')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('bayarcicilan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">cicilan kode</label>
              <input type="text" name="cicilan_kode" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">kridit  kode</label>
              <select name="kridit_kode" class="form-control">
                @foreach($beli_kridit as $data)
              <option value="{{ $data->id}}">
              {{ $data->kridit_kode}}
              </option>
              @endforeach
              </select>                  </div>
            <div class="form-group">
              <label for="">cicilan tanggal</label>
              <input type="text" name="cicilan_tanggal" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">cicilan jumlah</label>
              <input type="text" name="cicilan_jumlah" id="" class="form-control" aria-describedby="helpId" required>
            </div><div class="form-group">
              <label for="">cicilan ke</label>
              <input type="text" name="cicilan_ke" id="" class="form-control" aria-describedby="helpId" required>
            </div><div class="form-group">
              <label for="">cicilan sisa ke</label>
              <input type="text" name="cicilan_sisa_ke" id="" class="form-control" aria-describedby="helpId" required>
            </div>
           
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('bayarcicilan.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  	
</body>
</html>

@endsection 