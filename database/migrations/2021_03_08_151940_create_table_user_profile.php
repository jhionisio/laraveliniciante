<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table_>unsignedBigInteger('user_id');
            $table->timestamps();

            $table->text('about')->nullable(true);
            $table->text('social_network')->nullable(true);
            $table->string('phone');
            $table->string('mobile_phone');

            $table->foreign('user_id')->referencer('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profile');
    }
}
