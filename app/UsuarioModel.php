<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    protected $table ='usuario';

    protected $fillable = [
        'nome_u', 'senha' ,'email', 'cep', 'rua' 
    ];

	}	
