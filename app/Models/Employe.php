<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'role', 'station_service_id'];
    
    public function stationService()
    {
        return $this->belongsTo(StationService::class);
    }
}
