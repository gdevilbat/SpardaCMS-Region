<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;

use DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("info_provinsi")->insert(File::getRequire(module_asset_path('region:storage/provinsi.php')));
    }


}
