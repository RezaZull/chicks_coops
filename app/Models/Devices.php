<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Devices extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];

    public function User():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function DataSensors():BelongsTo{
        return $this->belongsTo(DataSensors::class, 'device_id', 'id');
    }

    public function ConfigHeater():BelongsTo{
        return $this->belongsTo(ConfigHeater::class, 'device_id', 'id');
    }

    public function ConfigLamp():BelongsTo{
        return $this->belongsTo(ConfigLamp::class, 'device_id', 'id');
    }

    // public function get_device_id(){
    //     return sprintf('Coop-%03d', $this->id);
    // }
}
