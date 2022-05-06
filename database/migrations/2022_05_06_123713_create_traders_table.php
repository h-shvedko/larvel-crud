<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traders', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('name', 50);
            $table->text('description');
            $table->string('full_address', 250);
            $table->string('email', 100);
            $table->string('VATID', 50)->nullable();
            $table->unsignedInteger('telephone');
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('state', 50)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('hause', 10)->nullable();
            $table->string('additional_address', 100)->nullable();
            $table->unsignedInteger('is_active')->default(1);
            $table->dateTime('created_at');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('modified_by');
            $table->dateTime('modified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traders');
    }
}
