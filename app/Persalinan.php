<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persalinan extends Model
{
    //
    protected $table = 'persalinan';

    public function pasien(){
        return $this->belongsTo('App\Pasien','data_pasien_id');
    }

    public function notapersalinan(){
        return $this->belongsToMany('App\NotaPersalinan','nota_detail_persalinan','nota_id','persalinan_id')->withPivot('jumlah','harga','keterangan');
    }

}
