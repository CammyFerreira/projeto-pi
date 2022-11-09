<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $timestamp = false;
    protected $fillable = ['categoria_id', 'produto_nome', 'produto_desc', 'produto_preco', 'produto_desconto', 'produto_ativo'];
    protected $table = 'PRODUTO';
    protected $primaryKey = 'produto_id';


}
