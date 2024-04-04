<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlerteStock extends Model
{
    protected $fillable = ['station_service_id', 'type_carburant', 'quantite_min_alerte'];
    
    public function stationService()
    {
        return $this->belongsTo(StationService::class);
    }
}
