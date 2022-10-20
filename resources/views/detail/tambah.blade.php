@extends('layout.master')
@section('content')
<div class="card card-primary">
 <div class="card-header">
    <h3 class="card-title">Tambah Data Detail</h3>
 </div>
  <!-- /.card-header -->
  <!-- form start -->
<form method="POST" action="/det/simpan">
    @csrf
<div class="card-body">
    <div class="form-group">
        <label for="">id_transaksi_detail</label>
        <input type="text" name="id_transaksi_detail" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">id_transaksi</label>
        <input type="text" name="id_transaksi" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Id barang</label>
        <input type="text" name="id_barang" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">transaksi_tanggal</label>
        <input type="text" name="transaksi_tanggal" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">transaksi_nonota</label>
        <input type="text" name="transaksi_nonota" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">transaksi_status</label>
        <input type="text" name="transaksi_status" class="form-control" id="" placeholder="">
    </div>
    <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</div>
</form>
</div>
@endsection