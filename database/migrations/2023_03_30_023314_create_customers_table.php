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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->text('kode_referal')->nullable();
            $table->text('no_invoice')->nullable();

            $table->string('nama');
            $table->string('emaiil');
            $table->string('phone');
            $table->text('alamat');
            $table->string('jenis_mobil');
            $table->string('tipe_karpet');
            $table->integer('status');
            $table->text("keterangan")->nullable();

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
        Schema::dropIfExists('customers');
    }
};
