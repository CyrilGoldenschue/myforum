<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesHasUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('roles_has_users')->delete();

        \DB::table('roles_has_users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'users_id' => 1,
                'roles_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'users_id' => 2,
                'roles_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'users_id' => 3,
                'roles_id' => 2,
            ),
            3 =>
            array (
                'id' => 4,
                'users_id' => 4,
                'roles_id' => 2,
            ),
            4 =>
            array (
                'id' => 5,
                'users_id' => 5,
                'roles_id' => 2,
            ),
            5 =>
            array (
                'id' => 6,
                'users_id' => 6,
                'roles_id' => 2,
            ),
            6 =>
            array (
                'id' => 7,
                'users_id' => 7,
                'roles_id' => 2,
            ),
            7 =>
            array (
                'id' => 8,
                'users_id' => 8,
                'roles_id' => 2,
            ),
            8 =>
            array (
                'id' => 9,
                'users_id' => 9,
                'roles_id' => 2,
            ),
            9 =>
            array (
                'id' => 10,
                'users_id' => 11,
                'roles_id' => 2,
            ),
            10 =>
            array (
                'id' => 11,
                'users_id' => 13,
                'roles_id' => 2,
            ),
            11 =>
            array (
                'id' => 12,
                'users_id' => 14,
                'roles_id' => 2,
            ),
            12 =>
            array (
                'id' => 13,
                'users_id' => 15,
                'roles_id' => 2,
            ),
        ));


    }
}
