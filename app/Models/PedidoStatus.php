<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoStatus extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = ['STATUS_ID', 'PEDIDO_DESC'];
    protected $table = 'PEDIDO_STATUS';
}
