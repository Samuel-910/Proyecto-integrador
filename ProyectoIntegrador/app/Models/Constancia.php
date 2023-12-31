<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constancia extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function practicante()
    {
        return $this->belongsTo(Practicante::class);
    }
}
