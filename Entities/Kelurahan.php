<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = ['id_kelurahan', 'nama_kelurahan', Kecamatan::FOREIGN_KEY, 'kode_pos'];
    protected $primaryKey = 'id_kelurahan';
    protected $table = 'info_kelurahan';
    public $timestamps = false;

    const FOREIGN_KEY = 'kelurahan_id';

    final static function getTableName()
    {
        return with(new Static)->getTable();
    }

    final static function getPrimaryKey()
    {
        return with(new Static)->getKeyName();
    }
}
