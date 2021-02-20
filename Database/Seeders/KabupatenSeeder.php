<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;

use DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("info_kabupaten")->insert(File::getRequire(module_asset_path('region:storage/kabupaten.php')));
    }
}
