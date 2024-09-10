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
        Schema::create('pengaduans', function(Blueprint $table){
            $table->id();
            $table->string('gambar');
            $table->string('nama_pengadu');
            $table->string('alamat_pengadu');
            $table->string('jenis_keterangan');
            $table->longText('isi_keterangan');
            $table->string('nohp');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
        
    }
};
