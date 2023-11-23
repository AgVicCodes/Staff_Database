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
            $table->name();
            $table->email();
            $table->secondary_email();
            $table->status();
            $table->level();
            $table->role();
            $table->phone();
            $table->wage();
            $table->home_address();
            $table->social_media();
            $table->field();
            $table->doc_1();
            $table->doc_2();
            $table->doc_3();
            $table->avatar();
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
