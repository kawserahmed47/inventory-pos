<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('order_no');
            $table->bigInteger('customer_id');
            $table->bigInteger('customer_id_no');
            $table->bigInteger('supplier_id');
            $table->bigInteger('supplier_id_no');


            $table->string('customer_name');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();

            $table->tinyInteger('payment_method')->default(1);

            $table->double('total_product_unit_amount', 8, 2)->default(0.00);
            $table->double('total_product_unit_discount_amount', 8, 2)->default(0.00);

            $table->double('total_coupon_discount_amount', 8, 2)->default(0.00);
            $table->string('applied_coupon_code')->nullable();

            $table->double('total_reward_discount_amount', 8, 2)->default(0.00);
            $table->integer('applied_reward_points')->default(0);

            $table->double('total_consider_less_amount', 8, 2)->default(0.00);
            $table->double('total_product_order_amount', 8, 2)->default(0.00);

            $table->double('delivery_charge', 8, 2)->default(0.00);
            $table->double('total_order_cost', 8, 2)->default(0.00);



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
        Schema::dropIfExists('orders');
    }
}
