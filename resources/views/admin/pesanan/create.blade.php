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
                                <form action="{{url('admin/pesanan/store')}}" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                        <div class="col-8">
                                            <input id="tanggal" name="tanggal" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total" class="col-4 col-form-label">Total</label>
                                        <div class="col-8">
                                            <input id="total" name="total" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection