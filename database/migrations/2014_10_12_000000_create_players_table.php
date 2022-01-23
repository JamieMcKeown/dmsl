<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id('id');

            $table->string('first_name')->default('Jamie');
            $table->string('last_name')->default('McKeown');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();

            $table->char('contact_preference', 50)->nullable();

            $table->enum('available_days', array('Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'))->nullable();
            $table->enum('role', array('Player', 'Team Admin'))->nullable();
            $table->enum('available_times', array(7, 9, 'both'))->nullable();
            $table->enum('available_division', array('Shields', 'MacDonald', 'either'))->nullable();
            $table->enum('available_position', array('1', '2', '3', 'SS', 'Catcher', 'Pitcher', 'Rover', 'Outfield', 'any'))->nullable();

            $table->integer('team_id')->unsigned()->nullable();

            $table->foreign('team_id')->references('id')->on('teams');
            
            $table->boolean('is_online')->nullable();
            $table->boolean('is_team_admin')->nullable();
 
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
        Schema::dropIfExists('players');
    }
}
