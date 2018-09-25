<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ditlitabmas extends Model
{
    protected $table = 'ditlitabmas';
    public $timestamps = false;
    protected $guarded = [];

    public function dosens()
    {
        return $this->belongsToMany('App\Datadosen');
    }

    public function periodes()
    {
        return $this->belongsTo('App\Periode','periode_id');
    }

    public function years()
    {
        return $this->belongsTo('App\Tahunkegiatan','tahun_id');
    }

    protected static function hapus()
    {
        parent::hapus();
        static::deleted(function ($datas) {
            $dosens = DatadosenDitlitabmas::find($datas->ditlitabmas_id);
            if($dosens){
                $dosens->delete();
            };
        });
    }

}
