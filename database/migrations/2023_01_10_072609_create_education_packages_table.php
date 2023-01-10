<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->longText('description')->nullable();
            $table->integer('price')->unsigned();
            $table->integer('sort_order')->unsigned()->nullable()  ;
            $table->integer('duration')->unsigned()->nullable() ;
            $table->enum('status', ["enabled","disabled"]);
            $table->softDeletes();
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
        Schema::dropIfExists('education_packages');
    }
}
