<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Persalinan extends Model
{
    //
    use softDeletes;
    protected $table = 'persalinan';

    public function pasien(){
        return $this->belongsTo('App\Pasien','data_pasien_id');
    }

    public function notapersalinan(){
        return $this->belongsToMany('App\NotaPersalinan','nota_detail_persalinan','nota_id','persalinan_id')->withPivot('jumlah','harga','keterangan');
    }

}
