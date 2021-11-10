<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ape_paterno', 'ape_materno', 'edad'];

    public function libro() {
        return $this->hasOne('App\Models\Libro');
    }
}
