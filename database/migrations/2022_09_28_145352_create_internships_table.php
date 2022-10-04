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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('company_name')->comment('企業/部門名');
            $table->string('title')->comment('インターンシップ名');
            $table->string('pic_name')->comment('担当者名');
            $table->string('pic_email')->comment('担当者メールアドレス');
            $table->string('pic_tel')->comment('担当者電話番号');
            $table->string('position_name')->comment('募集ポジション名');
            $table->string('duration')->comment('実施期間');
            $table->string('salary_type')->comment('給与形態');
            $table->text('content')->comment('内容詳細');
            $table->string('image')->nullable();
            $table->string('limit_of_candidates')->comment('募集人数');
            $table->string('attachment_1')->nullable()->comment('インターン概要PDF等');
            $table->string('attachment_2')->nullable()->comment('その他会社概要PDF等');
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
        Schema::dropIfExists('internships');
    }
};
