<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_registration', function (Blueprint $table) {
            $table->id();
            // $table->integer('sr.no.');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('email');
            $table->integer('mobNo');
            $table->string('city');
            $table->string('address');
            $table->integer('pincode');
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
        Schema::dropIfExists('member_registration');
    }
};
