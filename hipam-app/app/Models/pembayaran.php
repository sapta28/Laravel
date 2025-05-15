<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans' ;
    protected $fillable = [
        'tagihan_id', 
        'user_id', 
        'tanggal_pembayaran', 
        'jumlah_dibayarkan', 
        'metode_pembayaran', 
        'bukti_pembayaran'
    ];
}
