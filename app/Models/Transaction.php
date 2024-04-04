<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['client_id', 'pompe_id', 'montant_total', 'date_transaction'];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function pompe()
    {
        return $this->belongsTo(Pompe::class);
    }
}
