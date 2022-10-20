<?php

namespace App\Http\Controllers;
use App\Models\Transaksi_detail;
use DB;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index($id)
    {
        $det = Transaksi_detail::all();
        // ->join('tbl_barang', 'tbl_barang.id_barang', '=', 'tbl_transaksi_detail.id_barang')
        // ->where('id_transaksi',$id)
        // ->get();
        return view('detail.index',compact(['det']));
    }
}
