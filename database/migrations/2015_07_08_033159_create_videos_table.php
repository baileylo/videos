<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug');
            $table->string('source_id');
            $table->enum('source', (new App\Video)->sources);
            $table->enum('status', (new App\Video)->statuses);

            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->string('url');
            $table->tinyInteger('length', false, true)->nullable();

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
        Schema::drop('videos');
    }
}
