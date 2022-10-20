@extends('layout.master')
@section('content')
<div class="card card-primary">
 <div class="card-header">
    <h3 class="card-title">Tambah Data Transaksi</h3>
 </div>
  <!-- /.card-header -->
  <!-- form start -->
<form method="POST" action="/transaksi/simpan">
    @csrf
<div class="card-body">
    
    <div class="form-group">
        <label for="">Id Admin</label>
        <input type="text" name="id_admin" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Transaksi Tanggal</label>
        <input type="text" name="transaksi_tanggal" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Transaksi Nonota</label>
        <input type="text" name="transaksi_nonota" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Transaksi Status</label>
        <input type="text" name="transaksi_status" class="form-control" id="" placeholder="">
    <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</div>
</form>
</div>
@endsection