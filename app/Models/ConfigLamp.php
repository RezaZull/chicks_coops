<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConfigLamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'device_id',
        'status',
        'time_on',
        'time_off'
    ];

    public function Devices():HasOne{
        return $this->hasOne(Devices::class, 'id', 'device_id');
    }
}
