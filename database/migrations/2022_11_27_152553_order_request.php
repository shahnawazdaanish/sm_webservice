<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('oracle')->create('order_request', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('RequestID')->nullable();
            $table->string('OrderID')->nullable();
            $table->string('VPOrderID')->nullable();
            $table->integer('Version')->nullable();
            $table->integer('CollectionID')->nullable();
            $table->string('CollectionName')->nullable();
            $table->boolean('IsCancelled')->nullable();
            $table->integer('NomineeID')->nullable();
            $table->string('NomineeName')->nullable();
            $table->string('VendorID')->nullable();
            $table->string('VendorName')->nullable();
            $table->integer('FactoryID')->nullable();
            $table->string('FactoryName')->nullable();
            $table->string('DeliveryAddress')->nullable();
            $table->string('Comment')->nullable();
            $table->integer('CILQuantity')->nullable();
            $table->integer('CILRequestQuantity')->nullable();
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
        Schema::connection('oracle')->dropIfExists('order_request');
    }
};
