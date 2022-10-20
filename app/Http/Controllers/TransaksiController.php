<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi;
class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')
        ->get();
        return view('transaksi.index', compact('transaksi'));
    }
    public function tambah(){
        return view('transaksi.tambah');
    }
    public function simpan(request $request){
        //dd($request);
        $simpan = Transaksi::create([
           
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status
        ]);
        echo $simpan->id_transaksi;
        return redirect('transaksi');
    }
    public function hapus($id){
        $hapus = Transaksi::find($id);
        $hapus->delete();
        return redirect ('transaksi');
    }
    public function ubah($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.ubah', compact('transaksi'));
    }

    public function update($id,request $request){
        
        $transaksi= Transaksi::find($id);
        $transaksi->update($request->except('_token','_method','submit'));
            

        return redirect('transaksi');
    }
}