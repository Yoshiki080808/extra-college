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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('生徒名');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('zipcode');
            $table->string('country');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('tel');
            $table->string('image')->nullable()->comment('写真');
            $table->string('degree')->comment('学位');
            $table->string('university')->comment('大学名');
            $table->string('department')->comment('学部');
            $table->string('faculty')->comment('学科');
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
        Schema::dropIfExists('students');
    }
};
