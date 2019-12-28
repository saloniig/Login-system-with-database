<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *  
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('university_roll_no')->nullable();
            $table->string('class_roll_no');
            $table->string('contact_no');
            $table->string('email');
            $table->string('branch');
            $table->string('year');
            $table->string('iste_member');
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
        Schema::dropIfExists('posts');
    }
}
