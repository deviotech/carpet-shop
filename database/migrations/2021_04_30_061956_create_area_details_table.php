<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->nullable();
            $table->text('area_name')->nullable();
            $table->text('length_in_m')->nullable();
            $table->text('width_in_m')->nullable();
            $table->string('type')->nullable();
            $table->string('material_chosen')->nullable();
            $table->string('expected_material_delivery')->nullable();
            $table->string('scheduled_fit_date')->nullable();
            $table->string('room_price')->nullable();
            $table->string('going_ahead')->nullable();
            $table->string('fit_complete')->nullable();
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
        Schema::dropIfExists('area_details');
    }
}
