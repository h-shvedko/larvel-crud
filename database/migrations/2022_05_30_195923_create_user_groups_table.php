<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->smallInteger('id')->primary();
            $table->string('group_name', 50);
            $table->boolean('is_active')->default(1);
            $table->bigInteger('created_by');
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->bigInteger('modified_by');
            $table->timestamp('modified_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_groups');
    }
}
