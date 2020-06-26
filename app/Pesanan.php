<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
	public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function detail_pesanans()
    {
        return $this->hasMany('App\DetailPesanan','pesanan_id','id');
    }
}
