<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['USUARIO_ID', 'PRODUTO_ID', 'ITEM_QTD'];
    protected $table = 'CARRINHO_ITEM';

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('USUARIO_ID', '=', $this->getAttribute('USUARIO_ID'))
            ->where('PRODUTO_ID', '=', $this->getAttribute('PRODUTO_ID'));

        return $query;
    }

    public function Produto(){
        return $this->belongsTo(Product::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

}
