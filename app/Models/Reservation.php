<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_house',    
        'id_user',    
        'start_date',  
        'end_date', 
    ];


    public function house()
    {
        return $this->belongsTo(House::class, 'id_house');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
