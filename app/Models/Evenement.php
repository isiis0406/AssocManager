<?php

namespace App\Models;

use App\Models\Membre;
use App\Models\Association;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{

    use HasFactory;

    protected $fillable = [
        'nom',
        'ville',
        'Type',
        'date',
        'tarif',
        'affiche',
        'association_id'
    ];

    public function membres()
    {
        return $this->hasMany(Membre::class);
    }

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
