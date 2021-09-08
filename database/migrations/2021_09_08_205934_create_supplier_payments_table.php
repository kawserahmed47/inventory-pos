<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_payments', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('supplier_id');
            $table->string('supplier_id_no')->nullable();

            $table->double('payable_amount', 8, 2)->default(0.00);
            $table->double('paid_amount', 8, 2)->default(0.00);
            $table->double('due_amount', 8, 2)->default(0.00);

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
        Schema::dropIfExists('supplier_payments');
    }
}
