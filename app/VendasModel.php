<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendasModel extends Model
{
    protected $table ='vendas';
    protected $fillable=[
    	'produto_vendido', 'quantidade', 'vendedor'
    ];
}
