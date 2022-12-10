<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_customer', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerName');
            $table->string('CustomerAddress');
            $table->decimal('GstNumber');
            $table->string('PanNumber');
            $table->string('Email');
            $table->decimal('MobileNumber');
            $table->string('BankName');
            $table->string('IFSC');
            $table->decimal('BankAccount');
            $table->unsignedBigInteger('customer_users_id');
            $table->foreign('customer_users_id')->references('customer_users_id')->on('customer_users');
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
        Schema::dropIfExists('_add_customer');
    }
}
