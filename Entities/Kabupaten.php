<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $fillable = ['id_kabupaten', 'nama_kabupaten', 'id_provinsi'];
    protected $table = 'info_kabupaten';
    public $timestamps = false;
}
