<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchase_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('purchase_id')->unsigned();
            $table->foreign('purchase_id')->references('id')->on('purchase')->unique();
            $table->string('nama_barang');
            $table->string('part_number');
            $table->integer('qty');
            $table->char('qty_type');
            $table->integer('harga');
            $table->integer('diskon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_detail');
    }
};
