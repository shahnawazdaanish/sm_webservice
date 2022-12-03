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
        Schema::connection('oracle')->create('final_accept_order_request', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('OrderID', 100);
            $table->integer('Version');
            $table->integer('fao_requests_id');
            $table->timestamps();
            $table->foreign('fao_requests_id')
                ->references('id')
                ->on('final_accept_order_requests')
                ->cascadeOnDelete()
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('oracle')->dropIfExists('final_accept_order_request');
    }
};
