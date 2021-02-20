<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = ['id_kecamatan', 'nama_kecamatan', Kabupaten::FOREIGN_KEY];
    protected $primaryKey = 'id_kecamatan';
    protected $table = 'info_kecamatan';
    public $timestamps = false;

    const FOREIGN_KEY = 'kecamatan_id';

    final static function getTableName()
    {
        return with(new Static)->getTable();
    }

    final static function getPrimaryKey()
    {
        return with(new Static)->getKeyName();
    }
}
