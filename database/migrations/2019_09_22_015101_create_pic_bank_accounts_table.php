<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pic_bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pic_id');
            $table->integer('bank_account_id');
            $table->unique(['pic_id', 'bank_account_id']);
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
        Schema::dropIfExists('pic_bank_accounts');
    }
}
