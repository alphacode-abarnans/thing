<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThingsTable extends Migration
{
    public function up()
    {
        Schema::create('things', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('expiry_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('things');
    }
}
