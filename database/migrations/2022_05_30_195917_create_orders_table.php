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
            $table->increments('id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('customers_id');
            $table->unsignedInteger('quantity')->default(1);
            $table->float('price_for_one')->unsigned()->default(0);
            $table->float('total_price')->unsigned()->default(0);
            $table->unsignedInteger('is_paid')->default(0);
            $table->unsignedInteger('is_delivered')->default(0);
            $table->unsignedInteger('is_active')->default(1);
            $table->unsignedInteger('is_on_pause')->default(0);
            $table->timestamp('modified_at')->nullable()->default('current_timestamp()');
            $table->timestamp('created_at')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('modified_by');
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
