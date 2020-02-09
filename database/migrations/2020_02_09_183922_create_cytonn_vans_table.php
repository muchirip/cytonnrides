<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCytonnVansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cytonn_vans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make', 60);
            $table->string('model', 60);
            $table->string('registration', 60);
            $table->date('year');
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
        Schema::dropIfExists('cytonn_vans');
    }
}
