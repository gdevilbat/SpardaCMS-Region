<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = ['id_provinsi', 'nama_provinsi'];
    protected $table = 'info_provinsi';
    public $timestamps = false;
}
