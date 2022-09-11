<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('r_fname');
            $table->string('r_lname');
            $table->string('r_email')->unique();
            $table->string('r_phone');
            $table->string('r_address');
            $table->string('r_city');
            $table->string('r_state');
            $table->string('r_country');
            $table->string('r_zip');
            $table->string('s_fname');
            $table->string('s_lname');
            $table->string('s_email')->unique();
            $table->string('s_phone');
            $table->string('s_address');
            $table->string('s_city');
            $table->string('s_state');
            $table->string('s_country');
            $table->string('s_zip');
            $table->string('tracking');
            $table->string('otp');


            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
