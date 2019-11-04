@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Beli kridit</div>
                <br>
                <center><a href="{{ route('belikridit.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kridit kode </th>
                                <th>no ktp</th>
                                <th>Paket Kode</th>
                                <th>motor kode</th>
                                <th>kridit tanggal</th>
                                <th>foto copy Ktp</th>
                               

                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($beli_kridit as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kridit_kode }}</td>
                    <td>{{ $data->pembeli->no_ktp }}</td>
                    {{-- <td>{{ $data->kridit_pakets->paket_kode }}</td> --}}
                    <td>{{ $data->motors->motor_kode }}</td>
                    <td>{{ $data->kridit_tanggal }}</td>
                    <td><img src="{{ asset('assets/img/belikridit/'.$data->fc_ktp)}}" width="100"></td>                    <td>{{ $data->fc_kk }}</td>
                                      <td>{{ $data->fc_kk }}</td>

                    <td><a href="{{ route('beli_kridit.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('beli_kridit.destroy', $data->id) }}" method="post">
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection