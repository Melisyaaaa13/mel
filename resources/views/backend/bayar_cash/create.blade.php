@extends('layouts.backend')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('bayarcash.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Cah kode</label>
              <input type="text" name="cash_kode" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">No ktp</label>
              <input type="text" name="no_ktp" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">motor kode</label>
              <select name="motor_kode" class="form-control">
              @foreach($motor as $data)
            <option value="{{ $data->id}}">
                {{ $data->motor_kode }}
            </option>
            @endforeach
        </select>
            </div>
            <div class="form-group">
              <label for="">Tanggal</label>
              <input type="date" name="tanggal" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">bayar</label>
              <input type="text" name="bayar" id="" class="form-control" aria-describedby="helpId" required>
            </div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('motor.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  	
</body>
</html>

@endsection