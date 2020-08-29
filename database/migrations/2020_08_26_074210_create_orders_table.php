<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->text('customer_name');
	    $table->text('adress');
	    $table->string('phone');
	    $table->integer('countf');
	    $table->integer('ptoduct_id');
            $table->string('product_name');
	    $table->longtext('comment');
            $table->dateTime('datums');
            $table->integer('customer_id');
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
        Schema::dropIfExists('orders');
    }
}
