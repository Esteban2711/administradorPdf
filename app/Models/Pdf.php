<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
  
    protected $table = 'pdfs';


    protected $fillable = [
        'nombre', 
        'ruta',
        'descripcion'
    ];
}
