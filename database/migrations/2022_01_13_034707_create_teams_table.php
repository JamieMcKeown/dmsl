<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id('id');

            
            $table->enum('division', array('Shields', 'MacDonald', 'either'))->nullable();
            $table->string('name');
            $table->string('coach_first_name')->nullable();
            $table->string('coach_last_name')->nullable();
            

            $table->boolean('need_player')->nullable();

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
        Schema::dropIfExists('teams');
    }
}
