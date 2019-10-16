@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Beli kridit</div>
                <br>
                <center><a href="{{ route('bayarcicilan.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>cicilan kode </th>
                                <th>kridit  kode</th>
                                <th>cicilan tanggal</th>
                                <th>cicilan jumlah</th>
                                <th>cicilan ke</th>
                                <th>cicilan sisa ke</th>
                             

                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($bayar_cicilan as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->cicilan_kode }}</td>
                    <td>{{ $data->kridit_kode }}</td>
                    <td>{{ $data->cicilan_tanggal }}</td>
                    <td>{{ $data->cicilan_jumlah }}</td>
                    <td>{{ $data->cicilan_ke }}</td>
                    <td>{{ $data->cicilan_sisa_ke }}</td>
    

                    <td><a href="{{ route('bayar_cicilan.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('bayar_cicilan.destroy', $data->id) }}" method="post">
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