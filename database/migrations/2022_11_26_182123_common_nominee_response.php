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
        Schema::connection('oracle')->create('common_nominee_response', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('RequestID')->nullable();
            $table->string('Status')->nullable();
            $table->string('ErrorCode')->nullable();
            $table->string('ErrorMessage')->nullable();
            $table->text('Response')->nullable();
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
        Schema::connection('oracle')->dropIfExists('common_nominee_response');
    }
};
