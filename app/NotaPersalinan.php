<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class NotaPersalinan extends Model
{
    //
    use softDeletes;
    protected $table = 'nota_persalinan';

    public function obat(){
        return $this->belongsToMany('App\Obat','nota_detail_persalinan','nota_id','obat_id')->withPivot('jumlah','harga','keterangan');
    }

    public function persalinan(){
        return $this->belongsToMany('App\Persalinan','nota_detail_persalinan','nota_id','persalinan_id')->withPivot('jumlah','harga','keterangan');
    }

}
