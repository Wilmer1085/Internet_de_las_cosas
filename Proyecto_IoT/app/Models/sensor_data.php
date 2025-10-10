<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensor_data extends Model
{
    use HasFactory;

    protected $table = 'sensor_data'; // 👈 Asegúrate de tener esto

    protected $fillable = [
        'sensor_name',
        'value',
        // agrega los campos que tengas en tu tabla
    ];
}
