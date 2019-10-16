@extends('layouts.backend')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('belikridit.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="">Kridit kode</label>
              <input type="text" name="kridit_kode" id="datatable" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
            <label for="">no ktp</label>
              <select name="no_ktp" class="form-control">
                @foreach($pembeli as $data)
              <option value="{{ $data->id}}">
              {{ $data->no_ktp}}
              </option>
              @endforeach
              </select>
            </div>
            {{-- <div class="form-group">
            <label for="">paket kode</label>
              <select name="paket_kode" class="form-control">
                @foreach($kridit_pakets as $data)
              <option value="{{ $data->id}}">
              {{ $data->paket_kode}}
              </option>
              @endforeach
              </select>           
             </div> --}}
            <div class="form-group">
            <label for="">motor kode</label>
              <select name="motor_kode" class="form-control">
                @foreach($motor as $data)
              <option value="{{ $data->id}}">
              {{ $data->motor_kode}}
              </option>
              @endforeach
              </select>           
            </div>
            <div class="form-group">
                <label for="">kridit tanggal</label>
                <input type="date" name="kridit_tanggal" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('belikridit.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  	
</body>
</html>

@endsection