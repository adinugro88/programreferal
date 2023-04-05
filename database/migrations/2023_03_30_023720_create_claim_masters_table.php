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
        Schema::create('claim_masters', function (Blueprint $table) {
            $table->id();
            $table->integer("fee_claimer");
            $table->integer("fee_diclaimer");
            $table->string("kode_referal");
            $table->string("nama");
            $table->string("phone");
            $table->string("email");
            $table->string("status");
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
        Schema::dropIfExists('claim_masters');
    }
};
