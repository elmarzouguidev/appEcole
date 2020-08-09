<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->unique();
            $table->string('slug',60)->unique();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('addresse');
            $table->string('tele')->unique();
            $table->string('email')->unique()->index('ecole_Emails');
            $table->string('website')->nullable()->unique();
            $table->geometry('positions')->nullable();
            $table->text('extras')->nullable();
          //  $table->double('address_latitude')->unique()->nullable();
          //  $table->double('address_longitude')->unique()->nullable();
            $table->enum('transport', ['avec', 'sans']);
            $table->enum('garde', ['avec', 'sans']);
            $table->enum('cantine', ['avec', 'sans']);
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
        Schema::dropIfExists('ecoles');
    }
}
