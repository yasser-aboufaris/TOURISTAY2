<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = 'houses';

    protected $fillable = [
        'id_owner',
        'title',
        'id_categorie',
        'description',
        'price',
        'image',
        'contract_start',
        'contract_end'
    ];

    // Define relationships
    public function owner()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categorie');
    }

    public function equipementes()
    {
        return $this->belongsToMany(House::class, 'equipement_house', 'id_house', 'id_equipement');
    }

    public function favorites()
    {
        return $this->belongsToMany(House::class, 'favorites', 'id_user', 'id_house');
    }
}
