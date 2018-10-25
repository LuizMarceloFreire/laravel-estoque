<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = [

    	'nome',
    	'valor',
    	'descricao',
    	'quantidade',
    	'total'

    ];
}
