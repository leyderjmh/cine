<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directores extends Model
{
    protected $table='directores';
    protected $primarikey='id';
    protected $fillable=['nombre','biografia','fecha_nac'];
}
