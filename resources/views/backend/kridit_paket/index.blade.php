@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman kridit kode</div>
                <br>
                <center><a href="{{ route('kriditpaket.create') }}" class="btn btn-primary">Tambah</a></center>

                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>paket kode</th>
                                <th>paket harga cash</th>
                                <th>paket uang muka</th>
                                <th>paket jumlah cicilan</th>
                                <th>paket bunga</th>
                                <th>paket nilai cicilan</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($kridit_paket as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket_kode }}</td>
                    <td>{{ $data->paket_harga_cash }}</td>
                    <td>{{ $data->paket_uang_muka }}</td>
                    <td>{{ $data->paket_jumlah_cicilan }}</td>
                    <td>{{ $data->paket_bunga }}</td>
                    <td>{{ $data->paket_nilai_cicilan }}</td>
                    <td><a href="{{ route('kriditpaket.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('kriditpaket.destroy', $data->id) }}" method="post">
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