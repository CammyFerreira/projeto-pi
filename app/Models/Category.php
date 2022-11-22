<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['CATEGORIA_NOME', 'CATEGORIA_DESC'];
    protected $table = 'CATEGORIA';

    public function categorias()
    {
        return $this->hasMany(Product::class, 'CATEGORIA_ID');
    }
}
