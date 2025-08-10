<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaAsisten', 
        'alamatAsisten', 
        'nomorTelepon', 
        'kodepos', 
        'pendidikan', 
        'pengalaman', 
        'bidangKeahlian', 
        'nomorRekening'
    ];
}
