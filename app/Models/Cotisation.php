<?php

namespace App\Models;

use App\Models\Membre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cotisation extends Model
{
    use HasFactory;
    protected $primaryKey = 'N°reçu';
    public $incrementing = true;
    
 
    public function membres()
    {
        return $this->belongsToMany(Membre::class);
    }
}
