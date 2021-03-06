<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('category_id');
            $table->integer('vendor_id');
            $table->string('sn')->nullable();
            $table->string('mac')->nullable();
            $table->string('ip')->nullable();
            $table->string('photo')->nullable();
            $table->string('ssh_username')->nullable();
            $table->string('ssh_password')->nullable();
            $table->string('ssh_port')->nullable();
            $table->string('creator');
            $table->softDeletes();
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
        Schema::dropIfExists('device_records');
    }
}
