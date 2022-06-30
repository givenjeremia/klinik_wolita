<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Obat extends Model
{
    //
    use softDeletes;
    protected $table = 'obat';

    public function notapemerisaan(){
        return $this->belongsToMany('App\NotaPemeriksaan','nota_detail_pemeriksaan','nota_id','obat_id')->withPivot('jumlah','harga','keterangan');
    }

    public function notapersalinan(){
        return $this->belongsToMany('App\NotaPersalinan','nota_detail_persalinan','nota_id','persalinan_id')->withPivot('jumlah','harga','keterangan');
    }

}
