<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPersalinan extends Model
{
    //
    protected $table = 'nota_persalinan';

    public function obat(){
        return $this->belongsToMany('App\Obat','nota_detail_persalinan','nota_id','obat_id')->withPivot('jumlah','harga','keterangan');
    }

    public function persalinan(){
        return $this->belongsToMany('App\Persalinan','nota_detail_persalinan','nota_id','persalinan_id')->withPivot('jumlah','harga','keterangan');
    }

}
