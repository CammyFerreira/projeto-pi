<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['IMAGEM_ID', 'IMAGEM_ORDEM', 'PRODUTO_ID', 'IMAGEM_URL'];
    protected $table = 'PRODUTO_IMAGEM';
    protected $primaryKey = 'PRODUTO_ID';

}
