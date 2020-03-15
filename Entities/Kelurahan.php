<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = ['id_kelurahan', 'nama_kelurahan', 'id_kecamatan', 'kode_pos'];
    protected $table = 'info_kelurahan';
    public $timestamps = false;
}
