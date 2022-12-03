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
        Schema::connection('oracle')->create('get_contract_version_request_response', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('RequestID', 100);
            $table->string('ContractVersion');
            $table->boolean('Status');
            $table->integer('ErrorCode');
            $table->string('ErrorMessage');
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
        Schema::connection('oracle')->dropIfExists('get_contract_version_request_response');
    }
};
