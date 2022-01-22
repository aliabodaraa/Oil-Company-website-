<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();


            $table->text('logo')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('number')->nullable();
            $table->string('startworktimes')->nullable();
            $table->string('endworktimes')->nullable();
            $table->string('startworkdays')->nullable();
            $table->string('endworkdays')->nullable();
            $table->string('email')->nullable();
            $table->text('aboutus')->nullable();
            //$table->json('aboutusimages');
            $table->json('supplies')->nullable();
            $table->json('services')->nullable();

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
        Schema::dropIfExists('generals');
    }
}
