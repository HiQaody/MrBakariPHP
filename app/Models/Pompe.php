<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pompe extends Model
{
    protected $fillable = ['station_service_id', 'type_carburant', 'prix', 'capacite'];
    
    public function stationService()
    {
        return $this->belongsTo(StationService::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
