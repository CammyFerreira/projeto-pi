<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PedidoItem;
use App\Models\PedidoStatus;

class Pedido extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = ['PEDIDO_ID', 'USUARIO_ID', 'STATUS_ID', 'PEDIDO_DATA'];
    protected $table = 'PEDIDO';

    public function itens(){
        return $this->hasMany(PedidoItem::class, 'PEDIDO_ID','PEDIDO_ID');
    }

    public function status(){
        return $this->belongsTo(PedidoStatus::class, 'STATUS_ID', 'STATUS_ID');
    }

}
