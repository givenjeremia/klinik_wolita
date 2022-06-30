<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Pasien extends Model
{
    //
    use softDeletes;
    protected $table = 'data_pasien';

    public function persalinan(){
        return $this->hasMany('App\Persalinan','data_pasien_id','id');
        
    }
}
