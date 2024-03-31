<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'tb_ulasan';
    protected $primaryKey = 'ulasan_id';

    protected $fillable = [
        'rating',
        'nama_lengkap',
        'text_ulasan',
        'jabatan',
    ];
}
