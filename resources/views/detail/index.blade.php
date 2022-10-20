@extends('layout.master')
@section('content')
<div class="card-header">
                <h3 class="card-title">Tampil Data Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/detail/tambah" class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi Detail</th>
                    <th>id transaksi</th>
                    <th>id barang</th>
                    <th>tanggal</th>
                    <th>no nota</th>
                    <th>status</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($det as $row)
                  <tr>
                    <td>{{$row->id_transaksi_detail}}</td>
                    <td>{{$row->id_transaksi}}</td>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->transaksi_tanggal}}</td>
                    <td>{{$row->transaksi_nonota}}</td>
                    <td>{{$row->transaksi_status}}</td>
                    <td><a href="detail/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                        <a href="detail/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
@endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
@endsection