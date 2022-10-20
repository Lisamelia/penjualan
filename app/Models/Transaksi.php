<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Transaksi extends Model
{
    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'id_transaksi' => [
                'format' => 'Tr?', //format kode yang akan digunakan
                'length' => 3 //jumlah digit yang akan digunakan sebagai nomor urut
                          ]
               ];
    }

    use HasFactory;
    protected $table='tbl_transaksi';
    protected $guarded = [];  
}
