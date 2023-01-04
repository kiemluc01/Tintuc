<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert(
            array(
                'username' => 'vanquynhqb98',
                'password' => '123',
                'first_name' => '8 Tủi',
                'last_name' => 'Quỳnh'
            ),
            array(
                'username' => 'admin',
                'password' => 'admin',
                'first_name' => 'admin',
                'last_name' => 'admin'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}