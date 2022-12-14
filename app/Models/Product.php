<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImgProduct;
use App\Models\ProdutoEstoque;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['categoria_id',
                           'produto_nome',
                           'produto_desc',
                           'produto_preco',
                           'produto_desconto',
                           'produto_ativo'];
    protected $table = 'PRODUTO';
    protected $primaryKey = 'produto_id';


    public function imagem(){
        return $this->hasMany(ImgProduct::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    public function estoque()
    {
        return $this->belongsTo(ProdutoEstoque::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
