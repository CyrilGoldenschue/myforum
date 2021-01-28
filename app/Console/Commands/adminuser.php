<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Role;
use Illuminate\Console\Command;

class adminuser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:adminuser {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Grants the admin role to a user';

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
        $id = $this->argument('id');

        if(User::where('id', '=', $id)->exists()){

            $user = User::where('id', $id)->first();
            $role = Role::where('slug', 'ADMI')->first();
            $user->role()->associate($role);
            $user->save();

            $this->line("$user->pseudo est admin");

        }else{
            $this->line("L'utilisateur $id n'existe pas");
        }
    }
}
