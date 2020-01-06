<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table ='produto';
    protected $fillable =[
    	'nome_p', 'preco'
    ];
}
