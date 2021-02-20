<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

use DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = File::getRequire(module_asset_path('region:storage/kelurahan.php'));

    	$output = new ConsoleOutput();
    	$progressBar = new ProgressBar($output, count($data));
    	$progressBar->start();

    	foreach ($data as $key => $row) {
	        DB::table("info_kelurahan")->insert($row);
	    	$progressBar->advance();
    	}

    	$progressBar->finish();

    }
}
