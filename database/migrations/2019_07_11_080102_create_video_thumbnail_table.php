<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoThumbnailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_thumbnail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('video_id');
            $table->string("thumbnail");
            $table->foreign('video_id')
                ->references('id')
                ->on('gallery')
                ->onDelete('cascade');
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
        Schema::dropIfExists('video_thumbnail');
    }
}
