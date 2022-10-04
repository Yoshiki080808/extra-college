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
        Schema::create('matchings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('internship_id')->constrained();
            $table->integer('is_matching')->comment('承認');
            $table->integer('is_orientation')->comment('研修中');
            $table->integer('is_internship')->comment('インターン中');
            $table->integer('is_done')->comment('修了');
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
        Schema::dropIfExists('matchings');
    }
};
