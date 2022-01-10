<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();

            $table->char('contact_preference', 50)->nullable();

            $table->enum('available_days', array('Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'))->nullable();
            $table->enum('available_times', array(7, 9, 'both'))->nullable();
            $table->enum('available_division', array('Shields', 'MacDonald', 'either'))->nullable();
            $table->enum('available_position', array('1', '2', '3', 'SS', 'Catcher', 'Pitcher', 'Rover', 'Outfield', 'any'))->nullable();

            $table->foreign('team_id')->references('id')->on('teams');

            $table->boolean('is_online');
 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
