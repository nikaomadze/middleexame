<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSawyobiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sawyobi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("id");
            $table->string("name");
            $table->string("status");
            $table->string("descripton");
            $table->string("store_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sawyobi');
    }
}
