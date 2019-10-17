<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purchase_order_id');
            $table->integer('product_id');
            $table->integer('vendor_id')->nullable();
            $table->integer('qty');
            $table->decimal('price', 12, 2);
            $table->decimal('total_price', 12, 2);
            $table->decimal('cashback', 12, 2)->nullable();
            $table->decimal('discount', 12, 2)->nullable();
            $table->decimal('sub_total', 12, 2)->nullable();
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
        Schema::dropIfExists('purchase_order_details');
    }
}
