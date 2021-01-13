<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiViet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viet', function (Blueprint $table) {
            $table->id();
            $table->string('nguoi_dang');
            $table->string('chuyen_muc');
            $table->string('tieu_de');
            $table->string('anh');
            $table->longText('noi_dung');
            $table->string('trang_thai');
            $table->timestamp('ngay_dang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_viet');
    }
}