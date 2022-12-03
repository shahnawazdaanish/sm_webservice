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
        Schema::connection('oracle')->create('sku_tables', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('RequestID', 100);
            $table->string('LabelID', 100);
            $table->integer('SkuID');
            $table->string('TDCode', 100);
            $table->integer('Quantity');
            $table->integer('SalesCountryID');
            $table->string('SalesCountryName', 100);
            $table->text('Comment');
            $table->integer('StickerID');
            $table->integer('OrderRequestID');
            $table->foreign('OrderRequestID')
                ->references('id')
                ->on('order_request')
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
        Schema::connection('oracle')->dropIfExists('sku_tables');
    }
};
