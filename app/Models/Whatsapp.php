<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatsapp extends Model
{
    use HasFactory;

    protected $table = 'tb_whatsapp';
    protected $primaryKey = 'whatsapp_id';

    protected $fillable = [
        'no_telpon',
        'text_whatsapp',
    ];
}
