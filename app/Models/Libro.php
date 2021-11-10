<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'autor_id', 'pais', 'paginas', 'generos', 'estado'];

    public function autor() {
        return $this->belongsTo('App\Models\Autor');
    }
}
