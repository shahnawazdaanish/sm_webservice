<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TABLE_NAME = 'temp_cil_requests';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('request_id', 255)->nullable();
            $table->string('order_id', 255)->nullable();
            $table->string('cil_request_number', 255)->nullable();
            $table->boolean('synced')->default(0);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE ' . self::TABLE_NAME . ' ADD data LONGBLOB NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
};
