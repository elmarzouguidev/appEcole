<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->longText('content')->nullable();
            $table->string('score')->nullable();
      
            $table->bigInteger('center_id')->unsigned()->nullable();
            $table->bigInteger('ecole_id')->unsigned()->nullable();
            $table->bigInteger('soutien_id')->unsigned()->nullable();
            $table->bigInteger('librairie_id')->unsigned()->nullable();
            $table->boolean('approved')->default(false);
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers');
            $table->foreign('ecole_id')->references('id')->on('ecoles');
            $table->foreign('soutien_id')->references('id')->on('soutiens');
            $table->foreign('librairie_id')->references('id')->on('librairies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
