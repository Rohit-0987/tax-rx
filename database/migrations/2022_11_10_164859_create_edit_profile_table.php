<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edit_profile', function (Blueprint $table) {
            $table->id('edit_id');
            $table->string('tradename',50);
            $table->decimal('Gst_no',20);
            $table->string('office_address',60);
            $table->string('state',60);

            $table->decimal('pin_code',6);
            $table->decimal('number',10);
            $table->string('pan_no',10);
            $table->string('AUTHORISED SIGNATORY PERSONS NAME',60);
            $table->string('bank_name',60);
            $table->string('IFSC',50);
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
        Schema::dropIfExists('edit_profile');
    }
}
