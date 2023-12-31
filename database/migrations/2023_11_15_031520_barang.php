<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id('id_obat');
            $table->integer('id_supplier');
            $table->string('nama_obat');
            $table->date('expired');
            $table->integer('id_kategori');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('qty');
            $table->integer('total');
            $table->integer('stok');
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
        Schema::dropIfExists('obat');
    }
}
