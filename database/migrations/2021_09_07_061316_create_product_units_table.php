<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_units', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('product_id');
            $table->bigInteger('supplier_id');

            $table->string('name');
            
            $table->string('slug')->unique()->nullable();

            $table->integer('packet_quantity')->default(0)->nullable();

            $table->integer('available_stock')->default(0);
            $table->double('supplier_price', 8, 2)->default(0.00);
            $table->double('max_retail_price', 8, 2)->default(0.00);

            $table->bigInteger('barcode')->nullable();
            $table->longText('barcode_view')->nullable();

            $table->string('manufacture_date')->nullable();
            $table->string('expiration_date')->nullable();


            $table->string('image')->nullable();
            $table->string('description')->nullable();

            $table->tinyInteger('status')->default(1);
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by')->nullable();

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
        Schema::dropIfExists('product_units');
    }
}
