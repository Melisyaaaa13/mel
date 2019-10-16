@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Beli kridit</div>
                <br>
                <center><a href="{{ route('bayarcash.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>cash kode </th>
                                <th>no  ktp</th>
                                <th>Tanggal</th>
                                <th>kode motor</th>
                                <th>Bayar</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($bayar_cash as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->cash_kode }}</td>
                    <td>{{ $data->pembelis->no_ktp }}</td>
                    <td>{{ $data->motors->motor_kode}}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->bayar }}</td>

    

                    <td><a href="{{ route('bayar_cash.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('bayar_cash.destroy', $data->id) }}" method="post">
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