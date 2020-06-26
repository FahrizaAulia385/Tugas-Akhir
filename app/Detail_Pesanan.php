<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
   public function barangs()
    {
        return $this->belongsTo('App\Barang','barang_id','id');
    }

    public function pesanans()
    {
        return $this->belongsTo('App\Pesanan','pesanan_id','id');
    }  
}
