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
        Schema::create('order__items', function (Blueprint $table) {
            $table->bigIncrements('order_item_id');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            
            // Thêm ràng buộc khóa ngoại
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            
            // Thêm ràng buộc khóa ngoại
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__items');
    }
};
