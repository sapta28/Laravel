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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')->constrained('tagihans')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('tanggal_pembayaran');
            $table->decimal('jumlah_dibayarkan', 10, 2);
            $table->string('metode_pembayaran');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};

//php artisan make:model -m nmamodel
//tmbh tabel
//tmbh protected model
//php artisan migrate
//php artisan make:filament-resource nmamodel --generate