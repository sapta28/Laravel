<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsumsibulanan extends Model
{
    use HasFactory;
    protected $table = 'konsumsibulanans' ;
    protected $fillable = [
        'user_id', 
        'bulan_tahun', 
        'meter_awal', 
        'meter_akhir', 
        'total_pemakaian', 
        'tanggal_input'
    ];
}
