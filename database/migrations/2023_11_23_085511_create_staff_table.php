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
            // $table->unsignedBigInteger('User_id');
            $table->foreignId('User_id')->constrained('users');
            $table->string('name', 25);
            $table->string('email', 40);
            $table->string('secondary_email', 40);
            $table->string('status');
            $table->string('level', 7);
            $table->string('role', 25);
            $table->string('phone', 14);
            $table->float('wage', 8, 2);
            $table->string('social_media', 25);
            $table->string('field', 25);
            $table->text('home_address');
            $table->text('leave_days');
            $table->date('hire_date');
            $table->date('date_of_birth');
            $table->binary('doc_1')->nullable();
            $table->binary('doc_2')->nullable();
            $table->binary('doc_3')->nullable();
            $table->binary('avatar')->nullable();
            $table->timestamps();
            
            // $table->foreignId('User_id')->references('id')->on('users');
            
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