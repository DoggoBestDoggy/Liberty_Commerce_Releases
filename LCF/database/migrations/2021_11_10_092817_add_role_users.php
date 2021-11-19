<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!schema::hasTable('users_has_role')) {
            schema::create('users_has_role', function (Blueprint $table) {
                $table->id();
                $table->string('role')->default("user");
            });
            #$seeder = new DatabaseSeeder();
            #$seeder->run();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (schema::hasTable('users_has_role')) {
            schema::drop('users_has_role');
        }
    }
}
