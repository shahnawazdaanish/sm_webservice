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
        Schema::connection('oracle')->create('cil_files', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('RequestID', 100);
            $table->integer('CILRequestNumber');
            $table->string('gtin')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('security_code')->nullable();
            $table->string('e_signature')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('barcode')->nullable();
            $table->string('code_td')->nullable();
            $table->string('style')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('ext_size')->nullable();
            $table->string('product_specific')->nullable();
            $table->integer('index')->nullable();
            $table->boolean('foc')->nullable();
            $table->integer('CILOrderRequestID');
            $table->foreign('CILOrderRequestID')
                ->references('id')
                ->on('cil_order_request')
                ->cascadeOnDelete()
            ;
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
        Schema::connection('oracle')->dropIfExists('cil_files');
    }
};
