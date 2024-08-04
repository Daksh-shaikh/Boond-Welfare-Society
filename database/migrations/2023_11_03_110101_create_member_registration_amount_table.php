<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_registration_amount', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('gender');
            // $table->integer('age');
            // $table->string('email');
            // $table->string('mobilenumber');
            // $table->string('city');
            // $table->text('address');
            // $table->integer('pincode');
            // $table->string('image')->nullable();
            // $table->string('payment_status');
            $table->integer('amount');
            // $table->integer('user_id');
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
        Schema::dropIfExists('member_registration_amount');
    }
};
