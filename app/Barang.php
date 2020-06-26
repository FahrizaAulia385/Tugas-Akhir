<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function detail_barangs()
    {
        return $this->hasMany('App\DetailPesanan','barang_id','id');
    }
}
