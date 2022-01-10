<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_persons', function (Blueprint $table) {
            $table->id();
            $table->string('complainant_first_name');
            $table->string('complainant_last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('missing_first_name');
            $table->string('missing_last_name');
            $table->string('gender');
            $table->integer('age');
            $table->string('last_seen');
            $table->string('city');
            $table->string('status')->default('Unsolved');
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('attachment')->nullable();
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
        Schema::dropIfExists('missing_persons');
    }
}
