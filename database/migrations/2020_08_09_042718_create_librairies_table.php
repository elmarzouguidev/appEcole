<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrairiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librairies', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->unique();
            $table->string('slug',60)->unique();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('addresse');
            $table->string('ville_name')->nullable();
            $table->string('area')->nullable();
            $table->string('tele')->unique();
            $table->string('email')->unique()->index('Emails');
            $table->string('website')->nullable()->unique();
            $table->string('whatsapp')->nullable()->unique();
            $table->geometry('positions')->nullable();
            $table->text('extras')->nullable();

            $table->enum('livraison', ['avec', 'sans']);
            $table->enum('type', ['bilingue', 'mission']);

            $table->tinyInteger('active')->default(true);
            $table->tinyInteger('inHome')->default(false);
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
        Schema::dropIfExists('librairies');
    }
}
