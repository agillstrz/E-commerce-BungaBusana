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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('namadepan');
            $table->string('namabelakang');
            $table->string('email');
            $table->string('Nohp');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->string('detail')->nullable();
            $table->string('kodepos');
            $table->string('image');
            $table->integer('totalharga');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('pembayaran');
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
};