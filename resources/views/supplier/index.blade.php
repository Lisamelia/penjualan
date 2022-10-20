@extends('layout.master')
@section('content')
<div class="card-header">
                <h3 class="card-title">Tampil Data Supplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/supplier/tambah" class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Supplier</th>
                    <th>Supplier Nama</th>
                    <th>Supplier Alamat</th>
                    <th>Supplier Phone</th>
                    <th>Supplier Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($supplier as $row)
                  <tr>
                    <td>{{$row->id_supplier}}</td>
                    <td>{{$row->supplier_nama}}</td>
                    <td>{{$row->supplier_alamat}}</td>
                    <td>{{$row->supplier_phone}}</td>
                    <td>{{$row->supplier_status}}</td>
                    <td><a href="supplier/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="supplier/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
@endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection