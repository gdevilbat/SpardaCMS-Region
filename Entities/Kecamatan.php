<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = ['id_kecamatan', 'nama_kecamatan', 'id_kabupaten'];
    protected $table = 'info_kecamatan';
    public $timestamps = false;
}
