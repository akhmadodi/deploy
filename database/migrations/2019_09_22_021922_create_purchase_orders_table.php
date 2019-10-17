<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('uid');
            $table->string('status')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->string('address');
            $table->text('note')->nullable();
            $table->text('greeting')->nullable();
            $table->decimal('shipping_fee', 12, 2)->nullable();
            $table->decimal('cashback', 12, 2)->nullable();
            $table->decimal('discount', 12, 2)->nullable();
            $table->date('order_at');
            $table->date('due_date')->nullable();
            $table->date('produced_date')->nullable();
            $table->dateTime('delivery_at')->nullable();
            $table->integer('customer_id');
            $table->integer('pic_id')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('purchase_orders');
    }
}
