<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vendor_id');
            $table->integer('bank_account_id');
            $table->unique(['vendor_id', 'bank_account_id']);
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
        Schema::dropIfExists('vendor_bank_accounts');
    }
}
