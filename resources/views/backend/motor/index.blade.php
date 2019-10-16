{{-- @extends('layouts.backend')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman motor Berita</div>
                <br>
                <center><a href="{{ route('motor.create') }}" class="btn bg-purple waves-effect">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                         <thead>                            
                            <tr class="bg-black">
                                <th>No</th>
                                <th>motor kode</th>
                                <th>motor merk</th>
                                <th>motor type</th>
                                <th>motor warna</th>
                                <th>motor harga</th>
                                <th>motor gambar</th>
                                <th style="width:100px;">Aksi</th>
                            </tr>
                         </thead>
                        <tbody>

                @php $no =1; @endphp
                @foreach($motor as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->motor_kode }}</td>
                    <td>{{ $data->motor_merk }}</td>
                    <td>{{ $data->motor_type }}</td>
                    <td>{{ $data->motor_warna }}</td>
                    <td>{{ $data->motor_harga }}</td>
                    <td><img src="{{ asset('assets/img/motor/'.$data->motor_gambar)}}" width="100"></td>
                    <td><a href="{{ route('motor.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('motor.destroy', $data->id) }}" method="post">
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
@endsection --}}

@extends('layouts.backend')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/DataTabless/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/DataTabless/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/DataTabless/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/DataTabless/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Halaman motor Berita</div>
                <br>
                <center><a href="{{ route('motor.create') }}" class="btn bg-purple waves-effect">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                         <thead>                            
                            <tr class="bg-black">
                                <th>No</th>
                                <th>motor kode</th>
                                <th>motor merk</th>
                                <th>motor type</th>
                                <th>motor warna</th>
                                <th>motor harga</th>
                                <th>motor gambar</th>
                                <th style="width:100px;">Aksi</th>
                            </tr>
                         
                        <tbody>
                            <tbody>
                                    @php $no =1; @endphp
                @foreach($motor as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->motor_kode }}</td>
                    <td>{{ $data->motor_merk }}</td>
                    <td>{{ $data->motor_type }}</td>
                    <td>{{ $data->motor_warna }}</td>
                    <td>{{ $data->motor_harga }}</td>
                    <td><img src="{{ asset('assets/img/motor/'.$data->motor_gambar)}}" width="100"></td>
                    <td><a href="{{ route('motor.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('motor.destroy', $data->id) }}" method="post">
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </thead>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 