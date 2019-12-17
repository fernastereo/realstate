<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('adsstatus_id');
            $table->unsignedBigInteger('propertytype_id');
            $table->unsignedBigInteger('destinationtype_id');
            $table->unsignedBigInteger('periodtype_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('physicalstatus_id');
            $table->unsignedBigInteger('socialstratum_id');
            $table->unsignedBigInteger('neighborhood_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('adsstatus_id')->references('id')->on('adsstatus');
            $table->foreign('propertytype_id')->references('id')->on('propertytypes');
            $table->foreign('destinationtype_id')->references('id')->on('destinationtypes');
            $table->foreign('periodtype_id')->references('id')->on('periodtypes');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('physicalstatus_id')->references('id')->on('physicalstatus');
            $table->foreign('socialstratum_id')->references('id')->on('socialstratums');
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
