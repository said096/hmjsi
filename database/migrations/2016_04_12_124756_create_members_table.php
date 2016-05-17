<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NRK', 19)->unique(); # NRK/XXX/HMJSI_XX/XX
            $table->string('name', 20);
            $table->string('address', 100);
            $table->string('photo', 20);
            $table->string('generation', 4); # tahun
            $table->string('phone', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
