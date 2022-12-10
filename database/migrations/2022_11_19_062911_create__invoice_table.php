<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id('InvoiceId');
            $table->decimal('InvoiceNumber');
            $table->date('InvoiceDate');
            $table->date('DueDate');
            $table->string('ClientBusinessAddress');
            $table->string('ClientAddress');
            $table->string('ClientCity');
            $table->string('ClientPostsl');
            $table->string('ClientState');
            $table->string('Country');
            $table->string('good/services');
            $table->decimal('taxablevalue');
            $table->decimal('HSN/SAC');
            $table->string('quantity');
            $table->string('UQC');
            $table->string('GstRate');
            $table->string('IGST');
            $table->string('CGST');
            $table->string('SGST/UTGST');
            $table->string('SupplyType');
            $table->unsignedBigInteger('customer_users_id');
            $table->foreign('customer_users_id')->references('customer_users_id')->on('customer_users');
            $table->unsignedBigInteger('CustomerId');
            $table->foreign('CustomerId')->references('CustomerId')->on('add_customer');
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
        Schema::dropIfExists('_invoice');
    }
}
