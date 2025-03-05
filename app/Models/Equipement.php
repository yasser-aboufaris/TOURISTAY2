<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    public function houses()
    {
        return $this->belongsToMany(Equipement::class, 'equipement_house', 'id_house', 'id_equipement');
    }
}
