<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
	    $table->string('color');
	    $table->string('country');
	    $table->text('description');
	    $table->float('price');
	    $table->int('category_id');
	    $table->int('count')->default(0);
	    $table->string('latin_url');
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
        Schema::dropIfExists('table_goods');
    }
}
