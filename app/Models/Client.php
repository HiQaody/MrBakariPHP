<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'prenom', 'adresse', 'telephone', 'email'];
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
