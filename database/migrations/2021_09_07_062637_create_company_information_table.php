<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_information', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('mobile');
            $table->string('phone');
            $table->string('contact');
            $table->string('care_line');
            $table->string('email');

            $table->string('facebook');
            $table->string('instagram');
            $table->string('whats_app');
            $table->string('twitter');
            $table->string('linked_in');
            $table->string('youtube');

            $table->text('short_description');
            $table->text('description');
            $table->text('mission');
            $table->text('vision');
            $table->text('message');
            $table->text('address');

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
        Schema::dropIfExists('company_information');
    }
}
