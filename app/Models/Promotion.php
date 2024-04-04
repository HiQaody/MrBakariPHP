<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['station_service_id', 'nom', 'description', 'date_debut', 'date_fin'];
    
    public function stationService()
    {
        return $this->belongsTo(StationService::class);
    }
}
