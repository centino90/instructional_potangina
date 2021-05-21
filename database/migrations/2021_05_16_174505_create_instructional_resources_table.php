<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInstructionalResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructional_resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('src_path');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('resource_type_id');
            $table->unsignedBigInteger('subject_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('resource_type_id')->references('id')->on('resource_types');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('instructional_resources');
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
