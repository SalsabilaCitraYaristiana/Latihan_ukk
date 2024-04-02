@extends('layouts.dashboard')
@section('content')

<form action="" method="post">
  <div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Produk</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar">
                </div>
            </div>
        </div>
    </div>
  </div>
  @endsection
                