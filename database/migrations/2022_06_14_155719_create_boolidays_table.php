<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boolidays', function (Blueprint $table) {
            $table->id();
            $table->string('title',150);
            $table->string('destination',100);
            $table->text('description');
            $table->tinyInteger('stay');
            $table->float('pricePerDay',6,2);
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('boolidays');
    }
}
