<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SliderProperty extends Model
{
    use HasFactory;

    protected $table = 'tb_slider_property';
    protected $primaryKey = 'slider_property_id';

    protected $fillable = [
        'property_id',
        'foto_slider',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
