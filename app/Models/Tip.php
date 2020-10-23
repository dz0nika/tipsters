<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    public function Sport() 
    {
    	return $this->belongsTo(Sport::class);
    }

    public function Tipster()
    {
        return $this->belongsTo(Tipster::class, 'tipster_id');
    }
}
