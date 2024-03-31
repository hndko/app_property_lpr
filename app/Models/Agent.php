<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $table = 'tb_agent';
    protected $primaryKey = 'agent_id';
    protected $fillable = [
        'foto_sampul',
        'nama_lengkap',
        'no_telpon',
        'instagram',
        'twitter',
        'facebook',
        'linked_in',
    ];
}
