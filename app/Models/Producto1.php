<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto1 extends Model
{
    /** @use HasFactory<\Database\Factories\Producto1Factory> */
    use HasFactory;
    protected $fillable =['nombre','descripcion','precio','cantidad'];
}
