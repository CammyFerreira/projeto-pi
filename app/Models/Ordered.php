<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordered extends Model
{
    use HasFactory;

    protected $timestamp = false;
    protected $fillable = ['PEDIDO_ID', 'USUARIO_ID', 'STATUS_ID', 'PEDIDO_DATA'];
    protected $table = 'PEDIDO';


}
