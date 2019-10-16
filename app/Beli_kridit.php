<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beli_kridit extends Model
{
    protected $fillable = ['kridit_kode', 'no_ktp', 'paket_kode', 'motor_kode', 'kridit_tanggal', 'fc_ktp'];
    public $timestamps = true;

    public function Kridit_pakets()
    {
        return $this->belongsTo(' App\Kridit_paket ', ' kridits_id ');
    }

    public function Motors()
    {
        return $this->belongsTo(' App\Motor ', ' motors_id ');
    }

    // public function Pembelis()
    // {
    //     return $this->belongsTo(' App\Pembeli ', ' pembelis_id');
    // }

}