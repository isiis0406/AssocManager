<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionEvenement extends Model
{
    use HasFactory;

    protected $primaryKey = ['idMembre','idEvenement'];
    public $incrementing = false;
    protected $keyType = 'string';
}
