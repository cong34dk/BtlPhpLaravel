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
        Schema::create('order__infos', function (Blueprint $table) {
            $table->bigIncrements('order_info_id');
            $table->bigInteger('order_id')->unsigned();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->text('note')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            
            // Thêm ràng buộc khóa ngoại
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__infos');
    }
};
