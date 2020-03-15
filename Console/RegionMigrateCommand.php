<?php

namespace Gdevilbat\SpardaCMS\Modules\Region\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use File;

class RegionMigrateCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'spardacms:migrate-region-information';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Indonesian Region';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    	ini_set("memory_limit", "512M");

    	$provinsi = File::getRequire(__DIR__ . '/../storage/provinsi.php');
    	$kabupaten = File::getRequire(__DIR__ . '/../storage/kabupaten.php');
    	$kecamatan = File::getRequire(__DIR__ . '/../storage/kecamatan.php');
    	$kelurahan = File::getRequire(__DIR__ . '/../storage/kelurahan.php');

    	/*========================================
    	=            Migrate Provinsi            =
    	========================================*/
    	
	    	$bar = $this->output->createProgressBar(count($provinsi));

	    	foreach ($provinsi as $key_provinsi => $value_provinsi) 
	    	{
	    		\Gdevilbat\SpardaCMS\Modules\Region\Entities\Provinsi::firstOrCreate($value_provinsi);
	    		$bar->advance();
	    	}

	    	$this->info("\r\n Provinsi Has Been Migrated");
    	
    	/*=====  End of Migrate Provinsi  ======*/
    	

    	/*=========================================
    	=            Migrate Kabupaten            =
    	=========================================*/
    	
	    	$bar = $this->output->createProgressBar(count($kabupaten));

	    	foreach ($kabupaten as $key_kabupaten => $value_kabupaten) 
	    	{
	    		\Gdevilbat\SpardaCMS\Modules\Region\Entities\Kabupaten::firstOrCreate($value_kabupaten);
	    		$bar->advance();
	    	}

	    	$this->info("\r\n Kabupaten Has Been Migrated");
    	
    	/*=====  End of Migrate Kabupaten  ======*/


    	/*=========================================
    	=            Migrate Kecamatan            =
    	=========================================*/

	    	$bar = $this->output->createProgressBar(count($kecamatan));
    	
	    	foreach ($kecamatan as $key_kecamatan => $value_kecamatan) 
	    	{
	    		\Gdevilbat\SpardaCMS\Modules\Region\Entities\Kecamatan::firstOrCreate($value_kecamatan);
	    		$bar->advance();
	    	}

	    	$this->info("\r\n Kecamatan Has Been Migrated");
    	
    	/*=====  End of Migrate Kecamatan  ======*/
    	
    	
    	/*=========================================
    	=            Migrate Kelurahan            =
    	=========================================*/

	    	$bar = $this->output->createProgressBar(count($kelurahan));
    	
	    	foreach ($kelurahan as $key_kelurahan => $value_kelurahan) 
	    	{
	    		\Gdevilbat\SpardaCMS\Modules\Region\Entities\Kelurahan::firstOrCreate($value_kelurahan);
	    		$bar->advance();
	    	}

	    	$this->info("\r\n Kelurahan Has Been Migrated");
    	
    	/*=====  End of Migrate Kelurahan  ======*/
    	

        $this->info("\r\n Indonesian Regional Has Been Migrated");

        return 0;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
