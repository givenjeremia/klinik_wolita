<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPemeriksaan extends Model
{
    //
    protected $table = 'nota_pemeriksaan';

    public function obat(){
        return $this->belongsToMany('App\Obat','nota_detail_pemeriksaan','nota_id','obat_id')->withPivot('jumlah','harga','keterangan');
    }

    public function pemeriksaan(){
        return $this->belongsToMany('App\Pemeriksaan','nota_detail_pemeriksaan','nota_id','pemeriksaan_id')->withPivot('jumlah','harga','keterangan');
    }

    // public function pemeriksaan(){
    //     return $this->belongsToMany('App\Pemeriksaan','nota_detail_pemeriksaan','pemeriksaan_id','obat_id')->withPivot('jumlah','harga','keterangan');
    // }



}
