<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->text('vision');
            $table->text('mission');
            $table->longText('history');
            $table->string('logo', 30);
            $table->string('phone', 12);
            $table->string('email', 30)->unique();
            $table->string('address');
            $table->string('facebook', 20);
            $table->string('twitter', 20);
            $table->string('instagram', 20);
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
        Schema::drop('abouts');
    }
}
