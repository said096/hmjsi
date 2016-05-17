<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->unique();
            $table->string('slug', 150);
            $table->longText('description');
            $table->string('image', 20);
            $table->decimal('cost', 10, 2);
            $table->date('date_activity');
            $table->date('date_opened');
            $table->date('date_closed');
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
        Schema::drop('activities');
    }
}
