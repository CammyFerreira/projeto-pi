<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class PedidoItem extends Model
{
    use HasFactory;

    protected $timestamp = false;
    protected $fillable = ['PRODUTO_ID', 'PEDIDO_ID', 'ITEM_QTD', 'ITEM_PRECO'];
    protected $table = 'PEDIDO_ITEM';


    protected function setKeysForSaveQuery($query)
    {
        $query
        ->where('PRODUTO_ID', '=', $this->getAttribute('PRODUTO_ID'))
        ->where('PEDIDO_ID', '=', $this->getAttribute('PEDIDO_ID'));
        return $query;
    }

    public function produto(){
        return $this->belongsTo(Product::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
