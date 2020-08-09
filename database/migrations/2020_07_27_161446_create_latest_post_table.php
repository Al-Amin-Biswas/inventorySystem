<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latest_post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('imagepath');
            $table->string('slug');
            $table->string('type');
            $table->integer('post_order');
            $table->integer('menu_order');
            $table->integer('submenu_order');
            $table->date('date');
            $table->string('month');
            $table->year('year');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('latest_post');
    }
}
