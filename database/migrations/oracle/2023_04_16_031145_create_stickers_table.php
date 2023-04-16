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
        Schema::connection('oracle')->create('stickers', function (Blueprint $table) {
            $table->id();
            $table->string('requestid')->autoIncrement();
            $table->string('stickerid')->index('index_stickerid');
            $table->string('brand')->nullable();
            $table->string('style')->nullable();
            $table->string('color')->nullable();
            $table->string('size_eu')->nullable();
            $table->string('size_state_standard')->nullable();
            $table->string('size_mp')->nullable();
            $table->string('safety_standard')->nullable();
            $table->string('max_wt')->nullable();
            $table->string('completeness_code')->nullable();
            $table->string('completeness_name')->nullable();
            $table->string('code_td')->nullable();
            $table->string('barcode')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('certification')->nullable();
            $table->string('state_standard')->nullable();
            $table->string('size')->nullable();
            $table->string('ext_size')->nullable();
            $table->string('name', 400)->nullable();
            $table->string('composition', 400)->nullable();
            $table->string('supplier_name', 400)->nullable();
            $table->string('supplier_address', 400)->nullable();
            $table->string('product_specific')->nullable();
            $table->string('color_name')->nullable();
            $table->string('importer', 500)->nullable();
            $table->string('manufactured_date')->nullable();
            $table->string('comment', 400)->nullable();
            $table->string('multipack_qty')->nullable();
            $table->string('multipack_barcode')->nullable();
            $table->string('size_us')->nullable();
            $table->string('size_uk')->nullable();
            $table->string('label_assignment')->nullable();
            $table->string('washing')->nullable();
            $table->string('bleaching')->nullable();
            $table->string('drying')->nullable();
            $table->string('ironing')->nullable();
            $table->string('professional_textile_care', 400)->nullable();
            $table->string('additional_care', 1000)->nullable();
            $table->string('licensor_product_code')->nullable();
            $table->timestamps();

            $table->unique(['requestid', 'stickerid'], 'unq_requestid_stickerid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('oracle')->dropIfExists('stickers');
    }
};
