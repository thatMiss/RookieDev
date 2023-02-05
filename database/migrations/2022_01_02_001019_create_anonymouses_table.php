<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnonymousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anonymouses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('city')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullabel();
            $table->string('model')->nulllabel();
            $table->string('location')->nullable();
            $table->string('message')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('anonymouses');
    }
}
