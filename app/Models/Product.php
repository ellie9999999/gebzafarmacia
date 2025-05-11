<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Puedes definir los campos que son asignables en masa
    protected $fillable = ['name', 'description', 'price', 'is_offer', 'image'];

    // Otras configuraciones y relaciones si es necesario
}
