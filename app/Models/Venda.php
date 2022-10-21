<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
     protected $fillable = ['id_venda', 'valor_venda', 'parcelamento', 'troca', 'tipo_pagamento', 'fk_cliente',];
     public function itemDetalhe() {
        return $this->hasOne('App\Produto', 'users_id', 'id');
    }
}
