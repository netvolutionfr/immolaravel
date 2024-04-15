<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'code_postal'];

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
