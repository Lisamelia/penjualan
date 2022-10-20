@extends('layout.master')
@section('content')
<div class="card-header">
                <h3 class="card-title">Tampil Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/barang/tambah" class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Barang</th>
                    <th>Barang Kode</th>
                    <th>Barang Nama</th>
                    <th>Id Jenis</th>
                    <th>Id Supplier</th>
                    <th>Harga Jual</th>
                    <th>Barang Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($barang as $row)
                  <tr>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->barang_kode}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->id_jenis}}</td>
                    <td>{{$row->id_supplier}}</td>
                    <td>{{$row->harga_jual}}</td>
                    <td>{{$row->barang_status}}</td>
                    <td><a href="barang/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="barang/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
@endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection