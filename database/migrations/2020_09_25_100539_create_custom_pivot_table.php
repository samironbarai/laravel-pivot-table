<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('my_p_id'); // post id
            $table->unsignedBigInteger('my_c_id'); // category id
            $table->timestamps();

            $table->foreign('my_p_id')->on('posts')->references('id')->onDelete('cascade');
            $table->foreign('my_c_id')->on('categories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_pivot');
    }
}
