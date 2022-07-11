<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateFirstUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command if the initialisation of the first Admin User';

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

        $user = User::create([
            'email' => 'superadmin@summercourses.fr',
            'password' => Hash::make('summercoursses123@'),
        ]);

        $role = Role::where('name', 'super-admin')->first();

        $user->assignRole($role);

        $this->info('super-admin created succesfully');


    }
}
