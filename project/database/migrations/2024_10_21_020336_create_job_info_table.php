<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID ของผู้ใช้ที่เพิ่มงาน
            $table->string('name'); // ชื่อของงาน
            $table->string('information'); // ข้อมูลของงาน
            $table->string('category'); // ประเภทของงาน
            $table->integer('member'); // ขนาดของทีม
            $table->integer('money'); // ค่าจ้างงาน
            $table->string('contact'); // ช่องทางการติดต่อ
            $table->string('image_url'); // รูปภาพประกอบ
            $table->string('risky'); // งานที่มีความเสี่ยงสูง
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_info');
    }
};
