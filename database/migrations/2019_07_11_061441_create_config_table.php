<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook')->nullable()->default("#");
            $table->string('twitter')->nullable()->default("#");
            $table->string('instagram')->nullable()->default("#");
            $table->string('phone')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email');
            $table->text('map_link');
            $table->longText('message');
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
        Schema::dropIfExists('config');
    }
}
