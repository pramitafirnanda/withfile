<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hki extends Model
{
    protected $table = 'hki';
    public $timestamps = false;
    protected $guarded = [];

    public function periodes()
    {
        return $this->belongsTo('App\Periode','periode_id');
    }

    public function years()
    {
        return $this->belongsTo('App\Tahunkegiatan','tahun_id');
    }

    public function dosens()
    {
        return $this->belongsToMany('App\Datadosen');
    }
}
