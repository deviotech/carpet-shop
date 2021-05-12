<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnderlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('underlays', function (Blueprint $table) {
            $table->id();
                 $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->nullable();
                 $table->string('underlay')->nullable();
                 $table->string('area')->nullable();
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
        Schema::dropIfExists('underlays');
    }
}
