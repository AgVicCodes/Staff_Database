<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('secondary_email');
            $table->string('status');
            $table->string('level');
            $table->string('role');
            $table->int('phone');
            $table->int('wage');
            $table->string('home_address');
            $table->string('social_media');
            $table->string('field');
            $table->binary('doc_1');
            $table->binary('doc_2');
            $table->binary('doc_3');
            $table->binary('avatar');
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
        Schema::dropIfExists('staff');
    }
}
