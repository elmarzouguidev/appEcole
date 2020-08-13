<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {

            $table->id();
            $table->string('name',50)->unique();
            $table->string('slug',60)->unique();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('addresse');
            $table->string('ville_name')->nullable();
            $table->string('area')->nullable();
            $table->string('all_niveaux')->nullable();
            $table->string('tele')->unique();
            $table->string('email')->unique()->index('centers_Emails');
            $table->string('website')->nullable()->unique();
            $table->geometry('positions')->nullable();
            $table->text('extras')->nullable();
            $table->enum('transport', ['avec', 'sans']);
           // $table->json('langues');
            $table->tinyInteger('active')->default(true);
            $table->foreignId('ville_id')->references('id')->on('villes');
            $table->foreignId('area_id')->references('id')->on('areas');
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
        Schema::dropIfExists('centers');
    }
}
