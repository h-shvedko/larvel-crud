<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name', 200);
            $table->string('file_path', 200);
            $table->string('file_type', 50);
            $table->float('file_size')->default(0);
            $table->dateTime('created_at');
            $table->dateTime('modified_at')->default('current_timestamp()');
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
        Schema::dropIfExists('files');
    }
}
