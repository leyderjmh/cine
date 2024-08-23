<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $table='peliculas';
    protected $primarikey='id';
    protected $fillable=['titulo','descripcion','año','duracion'];
}
