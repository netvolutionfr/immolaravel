<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'prix', 'ville_id'];

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}
