<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'precio',
        'stock',
        'descripcion',
        'condicion',
        'categoria_id'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
