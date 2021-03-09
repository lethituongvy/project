<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEatGrpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eat_grp', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->string('image');
            $table->foreignId('id_place')->constrained('place');
            $table->integer('number_of_member');
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
        Schema::dropIfExists('eat_grp');
    }
}
