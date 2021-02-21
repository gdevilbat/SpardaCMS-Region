<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Entities;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = ['id_provinsi', 'nama_provinsi'];
    protected $table = 'info_provinsi';
    protected $primaryKey = 'id_provinsi';
    public $timestamps = false;

    const FOREIGN_KEY = 'provinsi_id';

    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class, SELF::FOREIGN_KEY);
    }

    final static function getTableName()
    {
        return with(new Static)->getTable();
    }

    final static function getPrimaryKey()
    {
        return with(new Static)->getKeyName();
    }
}
