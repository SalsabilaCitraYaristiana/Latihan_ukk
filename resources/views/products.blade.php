@extends('layouts.dashboard')
@section('content')

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <a href="/add-products" class="btn btn-info btn-icon-split mb-4">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus-circle"></i>
                                </span>
                                <span class="text">Tambah Produk</span>
                            </a>

                            <div class="table-responsive table-hover">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Gambar</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            
                        </div>
                    </div>



@endsection