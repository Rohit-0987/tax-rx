<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->id('VendorId');
            $table->string('VendorName')->nullable();
            $table->string('VendorAddress')->nullable();
            $table->decimal('GstNumber')->nullable();
            $table->string('PanNumber')->nullable();
            $table->string('Email')->nullable();
            $table->decimal('MobileNumber')->nullable();
            $table->string('BankName')->nullable();
            $table->string('IFSC')->nullable();
            $table->decimal('BankAccount')->nullable();
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
        Schema::dropIfExists('vendor');
    }
}
