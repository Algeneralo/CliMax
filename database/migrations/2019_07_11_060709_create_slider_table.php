<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->text('first_text')->nullable();
            $table->string('first_text_color')->nullable();
            $table->text('second_text')->nullable();
            $table->string('second_text_color')->nullable();
            $table->string('button_text')->nullable();
            $table->text('button_link')->nullable();
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
        Schema::dropIfExists('slider');
    }
}
