<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoEstoque extends Model
{
    use HasFactory;

    protected $timestamp = false;

    protected $fillable = ['PRODUTO_ID',
                           'PRODUTO_QTD'];

    protected $table = 'PRODUTO_ESTOQUE';

    protected $primaryKey = 'PRODUTO_ID';
}
