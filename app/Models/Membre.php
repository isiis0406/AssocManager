<?php

namespace App\Models;

use App\Models\Evenement;
use App\Models\Cotisation;
use App\Models\Association;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'dateNaissance',
        'telephone',
        'profession',
        'email',
        'association_id'


    ];
 
    public function cotisations()
    {
        return $this->hasMany(Cotisation::class);
    }
 
    public function evenements(): BelongsToMany
    {
        return $this->belongsToMany(Evenement::class);
    }
   
    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
