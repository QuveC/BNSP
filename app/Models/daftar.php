<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    use HasFactory;
    protected $table = "daftar";

    protected $fillable = [
        "nama",
        "email",
        "nomor_hp",
        "semester",
        "ipk",
        "pilihan_beasiswa",
        "ststus_ujian"
    ];
    protected $primaryKey = "id";

    protected $timestamp = false;
    

}
