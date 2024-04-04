<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCarburant extends Model
{
    protected $fillable = ['station_service_id', 'type_carburant', 'quantite_stock', 'date_mise_a_jour'];
    
    public function stationService()
    {
        return $this->belongsTo(StationService::class);
    }
}
