<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id');
            $table->string('employee_id_no')->nullable();

            $table->double('salary_amount', 8, 2)->default(0.00);
            $table->double('bonus_amount', 8, 2)->default(0.00);
            $table->double('fine_amount', 8, 2)->default(0.00);
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
        Schema::dropIfExists('salaries');
    }
}
