<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'data_pasien';

    public function persalinan(){
        return $this->hasMany('App\Persalinan','data_pasien_id','id');
        
    }
}
