<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $fillable = ['id_kabupaten', 'nama_kabupaten', Provinsi::FOREIGN_KEY];
    protected $primaryKey = 'id_kabupaten';
    protected $table = 'info_kabupaten';
    public $timestamps = false;

    const FOREIGN_KEY = 'kabupaten_id';

    final static function getTableName()
    {
        return with(new Static)->getTable();
    }

    final static function getPrimaryKey()
    {
        return with(new Static)->getKeyName();
    }
}
