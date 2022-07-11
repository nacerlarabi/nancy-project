<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class InitRolesTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is for role initialisation';

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
        Role::create(['name' => 'super-admin']);
        $this->info('The super-admin role created successfully!');
        Role::create(['name' => 'admin']);
        $this->info('The admin role created successfully!');
        Role::create(['name' => 'user']);
        $this->info('The user role created successfully!');

    }
}
