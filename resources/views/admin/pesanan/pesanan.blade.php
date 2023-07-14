@extends('layouts.app')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Table</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($data as $d)
                                            <tr> 
                                                <td scope="col">{{ $no }}</td>
                                                <td scope="col">{{ $d->tanggal }}</td>
                                                <td scope="col">{{ $d->total }}</td>
                                                <td scope="col">{{ $d->nama_pelanggan }}</td>
                                                <td>
                                                    <a href="" class="btn btn-success">Hapus</a>
                                                    <a href="" class="btn btn-success">View</a>
                                                    <a href="" class="btn btn-success">Edit</a>
                                                </td> 
                                            </tr> 
                                        @php $no++ @endphp 
                                        @endforeach                   
                                    </tbody>
                                </table>
                                <a href="{{ url('admin/pesanan/create')}}" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection