<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConfigHeater extends Model
{
    use HasFactory;
    protected $fillable = [
        'device_id',
        'mode',
        'status',
        'max_temp',
        'min_temp'
    ];

    public function Devices():HasOne{
        return $this->hasOne(Devices::class, 'id', 'device_id');
    }
}
