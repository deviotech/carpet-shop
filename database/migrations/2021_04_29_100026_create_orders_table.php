<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('enquiry_date');
        $table->string('enquiry_number');
        $table->string('tower_contract');
        $table->string('cust_cont_name_1');
        $table->string('cust_cont_name_2')->nullable();
        $table->string('cust_cont_email_1');
        $table->string('cust_cont_email_2')->nullable();
        $table->string('cust_cont_mobile_1');
        $table->string('cust_cont_mobile_2')->nullable();
        $table->string('cust_cont_address_1');
        $table->string('cust_cont_address_2')->nullable();
        $table->string('cust_cont_address_3')->nullable();
        $table->string('cust_cont_address_4')->nullable();
        $table->string('aircode_1');
         $table->string('aircode_2')->nullable();
        $table->enum('area_type', ['residential', 'commercial'])->default('residential');

        //survay detail table
 $table->string('sub_floor_type')->nullable();
 $table->string('build_type')->nullable();
 $table->string('moisture_read_need')->nullable();
 $table->string('moisture_read_per')->nullable();
 $table->string('underfloor_heating')->nullable();
$table->string('speed_required')->nullable();
$table->string('speed_detail')->nullable();
$table->string('door_saddles_place')->nullable();
$table->string('door_saddles_need')->nullable();
$table->string('skirting_place')->nullable();
$table->string('action_skirting')->nullable();
$table->string('stairs')->nullable();
$table->string('runner')->nullable();
$table->string('binding_type')->nullable();
$table->string('rod')->nullable();
$table->string('rod_type')->nullable();
$table->string('rod_size')->nullable();
$table->string('up_lift')->nullable();

//internal inquery table
$table->string('to_measure_unscheduled')->nullable();
$table->string('estimate_date')->nullable();
$table->string('to_measure_scheduled')->nullable();
$table->string('to_price_quoted')->nullable();
$table->string('job_agreed')->nullable();
$table->string('comment')->nullable();
$table->string('full_comment')->nullable();
$table->string('calendar_for_install_date')->nullable();
$table->string('job_schedule')->nullable();
//payment table
$table->string('total_value')->nullable();
$table->string('payment_comment_val')->nullable();
$table->string('intial_deposit')->nullable();
$table->string('payment_comment_intial')->nullable();
$table->string('additional_payment')->nullable();
$table->string('payment_comment_additional')->nullable();
$table->string('balance_due')->nullable();
$table->string('status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
