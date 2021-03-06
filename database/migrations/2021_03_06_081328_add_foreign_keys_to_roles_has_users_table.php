<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRolesHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles_has_users', function (Blueprint $table) {
            $table->foreign('roles_id', 'fk_roles_has_users_roles1_idx')->references('id')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('users_id', 'fk_roles_has_users_users1_idx')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles_has_users', function (Blueprint $table) {
            //
        });
    }
}
