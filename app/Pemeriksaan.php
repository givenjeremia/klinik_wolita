<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    //
    protected $table = 'pemeriksaan';
    public function pasien(){
        return $this->belongsTo('App\Pasien','data_pasien_id');
    }

    public function notapemerisaan(){
        return $this->belongsToMany('App\NotaPemeriksaan','nota_detail_pemeriksaan','nota_id','pemeriksaan_id')->withPivot('jumlah','harga','keterangan');
    }
}
