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
        Schema::create('true_orders', function (Blueprint $table) {
            $table->id();
            $table->string("order_note");
            $table->string("total_price");
            $table->foreignId("ad_id")->constrained("admins");
            $table->foreignId("cust_id")->constrained("customers");
            $table->foreignId("field_id")->constrained("fields");
            $table->foreignId("time_id")->constrained("times");
            $table->foreignId("status_id")->constrained("statuses");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('true_orders');
    }
};
