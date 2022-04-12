<?php

namespace App\Models;

use App\Models\User;
use App\Models\Membre;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'slug',
        'domaine',
        'presentation',
        'user_id'
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function membres()
    {
        return $this->hasMany(Membre::class);
    }
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}
