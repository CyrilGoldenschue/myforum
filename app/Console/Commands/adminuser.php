<?php

namespace App\Console\Commands;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
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
    protected $description = 'key key:generate Set the application key make make:adminuser Grants the admin role to a user make:cast Create a new custom Eloquent';

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

            $user = RoleUser::where('user_id', $id)->first();
            $role = Role::where('name', 'Admi')->first();
            $user->role()->associate($role);
            $user->save();
            $name = $user->user->first_name;

            $this->line("$name est admin");

        }else{
            $this->line("L'utilisateur $id n'existe pas");
        }
    }
}
