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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('bulan_tahun');
            $table->integer('jumlah_pemakaian');
            $table->decimal('tarif_per_m3', 10, 2);
            $table->decimal('total_tagihan', 10, 2);
            $table->enum('status_pembayaran', ['Belum Bayar', 'Sudah Bayar'])->default('Belum Bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
