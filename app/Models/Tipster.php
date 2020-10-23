<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipster extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsToMany(User::class);
    }

    public function Tip()
    {
    	return $this->belongsTo(Tip::class, 'tip_id');
    }
}
