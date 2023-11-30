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
            $table->string('name', 25);
            $table->string('email', 25);
            $table->string('secondary_email', 25);
            $table->boolean('active')->default(false);
            $table->string('level', 7);
            $table->string('role', 25);
            $table->string('phone', 14);
            $table->float('wage', 8, 2);
            $table->text('home_address');
            $table->date('hire_date');
            $table->string('social_media', 25);
            $table->string('field', 25);
            $table->binary('doc_1')->nullable();
            $table->binary('doc_2')->nullable();
            $table->binary('doc_3')->nullable();
            $table->binary('avatar')->nullable();
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

// integer span 2,147,483,647