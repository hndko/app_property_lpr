<?php

namespace App\Models;

use App\Models\Kota;
use App\Models\Agent;
use App\Models\SliderProperty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected $table = 'tb_property';
    protected $primaryKey = 'property_id';

    protected $fillable = [
        'slug',
        'foto_sampul',
        'property_name',
        'agent_id',
        'kota_id',
        'harga',
        'sertifikat',
        'kondisi',
        'luas_tanah',
        'luas_bangunan',
        'alamat',
        'kelengkapan',
        'jumlah_lantai',
        'kamar_tidur',
        'kamar_mandi',
        'watt_listrik',
        'deskripsi',
        'is_status'
    ];

    protected $casts = [
        'is_status' => 'boolean',
    ];

    // Define the relationship with Agent model
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id', 'agent_id');
    }

    // Define the relationship with Kota model
    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id', 'kota_id');
    }

    public function sliders()
    {
        return $this->hasMany(SliderProperty::class, 'property_id', 'property_id');
    }
}
