<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_matches', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('player_id')->nullable();
            $table->integer('amt')->default('0');
            $table->integer('room_code')->nullable();
            $table->integer('match_status')->nullable();
            $table->integer('winning_status')->nullable();
            $table->integer('play_status');
            $table->string('image')->nullable();
            $table->integer('is_active')->default('1');
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
        Schema::dropIfExists('matches');
    }
}
