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
        Schema::create('equipmentinfo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('model_year');
            $table->string('speed');
            $table->foreignId('manu_id')->constrained('manuinfo');
            $table->foreignId('customer_id')->constrained("customers");
            $table->foreignId('purchase_id')->constrained("purchaseinfo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipmentinfo');
    }
};
