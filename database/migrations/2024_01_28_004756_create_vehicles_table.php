<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->bigInteger('universe_price');
            $table->integer('real_price');
            $table->integer('cargo_grid');
            $table->bigInteger('internal_storage');
            $table->integer('scm_speed');
            $table->integer('max_speed');
            $table->integer('hull_health');
            $table->timestamps();
            $table->foreign('collection_id')->references('id')->on('collections');


            $table->foreign('user_id')->references('id')->on('users');

            PersonID int FOREIGN KEY REFERENCES Persons(PersonID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
