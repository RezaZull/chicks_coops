<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DataSensors extends Model
{
    use HasFactory;
    protected $fillable = [
        'device_id',
        'temperature',
        'humidity',
        'light_intensity'
    ];

    public function Devices():HasOne{
        return $this->hasOne(Devices::class, 'id', 'device_id');
    }
}
