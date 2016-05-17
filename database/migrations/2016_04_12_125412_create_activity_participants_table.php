<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->string('name', 50);
            $table->string('email', 30)->unique();
            $table->string('address', 100);
            $table->string('place_birth', 30);
            $table->date('date_birth');
            $table->enum('gender', ['pria', 'wanita']);
            $table->string('campus_name', 30);
            $table->string('phone', 12);
            $table->timestamps();

            $table->foreign('activity_id')
                  ->references('id')
                  ->on('activities')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_participants');
    }
}
