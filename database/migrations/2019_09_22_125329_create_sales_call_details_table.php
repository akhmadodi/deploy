<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesCallDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_call_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sales_call_id');
            $table->integer('customer_category_id');
            $table->string('name');
            $table->string('status');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->integer('country_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->string('address');
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
        Schema::dropIfExists('sales_call_details');
    }
}
