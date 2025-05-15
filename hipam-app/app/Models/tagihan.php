<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagihan extends Model
{
    use HasFactory;
    protected $table = 'tagihans' ;
    protected $fillable = [
        'user_id', 
        'bulan_tahun', 
        'jumlah_pemakaian', 
        'tarif_per_m3', 
        'total_tagihan', 
        'status_pembayaran'
    ];
}
