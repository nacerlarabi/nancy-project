<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InitImagesPath extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images-path:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Commande used to initialise images path';

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
     * @return int
     */
    public function handle()
    {

        $pathsNames = ['origins','720x480','1280x720','1920x1080','3840x2160','7680x4320'];

        foreach($pathsNames as $pathName){

            $path = public_path('storage/upload/'.$pathName);

            if(!File::isDirectory($path)){

                File::makeDirectory($path, 0755, true, true);

                $this->info('Images path created!');

            }
            else{

                $this->error($path.' path already exist');

            }

        }

    }
}
