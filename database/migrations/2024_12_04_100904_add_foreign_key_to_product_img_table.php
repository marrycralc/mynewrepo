<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToProductImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_img', function (Blueprint $table) {
            // Add the product_id column if it doesn't exist
            if (!Schema::hasColumn('product_img', 'product_id')) {
                $table->unsignedBigInteger('product_id');
            }

            // Add the foreign key constraint
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');  // Optional: automatically delete images if the product is deleted
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_img', function (Blueprint $table) {
            // Drop the foreign key constraint if rolling back
            $table->dropForeign(['product_id']);
            
            // Drop the product_id column if rolling back
            $table->dropColumn('product_id');
        });
    }
}
