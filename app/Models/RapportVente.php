<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportVente extends Model
{
    protected $fillable = ['station_service_id', 'date_rapport', 'montant_total_ventes'];
    
    public function stationService()
    {
        return $this->belongsTo(StationService::class);
    }
}
