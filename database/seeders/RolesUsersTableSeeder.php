<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('role_user')->delete();

        \DB::table('role_user')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'role_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 2,
                'role_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 3,
                'role_id' => 2,
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 4,
                'role_id' => 2,
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 5,
                'role_id' => 2,
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 6,
                'role_id' => 2,
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 7,
                'role_id' => 2,
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 8,
                'role_id' => 2,
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 9,
                'role_id' => 2,
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 11,
                'role_id' => 2,
            ),
            10 =>
            array (
                'id' => 11,
                'user_id' => 13,
                'role_id' => 2,
            ),
            11 =>
            array (
                'id' => 12,
                'user_id' => 14,
                'role_id' => 2,
            ),
            12 =>
            array (
                'id' => 13,
                'user_id' => 15,
                'role_id' => 2,
            ),
        ));


    }
}
