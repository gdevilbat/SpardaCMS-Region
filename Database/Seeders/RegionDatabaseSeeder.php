<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RegionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        /*$this->call(ProvinsiSeeder::class);
        $this->call(KabupatenSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(KelurahanSeeder::class);*/
    }
}
