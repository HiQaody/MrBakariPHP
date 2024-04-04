<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationService extends Model
{
    protected $fillable = ['nom', 'adresse', 'heures_ouverture'];
    
    public function pompes()
    {
        return $this->hasMany(Pompe::class);
    }

    public function employes()
    {
        return $this->hasMany(Employe::class);
    }

    public function stockCarburants()
    {
        return $this->hasMany(StockCarburant::class);
    }

    public function rapportVentes()
    {
        return $this->hasMany(RapportVente::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function alertesStock()
    {
        return $this->hasMany(AlerteStock::class);
    }
}
