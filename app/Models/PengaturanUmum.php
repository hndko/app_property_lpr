<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanUmum extends Model
{
    use HasFactory;

    protected $table = 'tb_pengaturan_umum';
    protected $primaryKey = 'pu_id';

    protected $fillable = [
        'nama_website',
        'alamat',
        'no_telpon',
        'email',
        'day_start',
        'day_end',
        'hours_start',
        'hours_end',
        'instagram',
        'twitter',
        'facebook',
        'linkedin',
    ];
}
