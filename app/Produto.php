<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'quant_prod', 'cod_barra', 'valor_unitario'];

    protected $hiden = ['id'];

    public function pedidos()
    {
      return $this->belongsToMany('App\Pedido', 'PedidoProduto');
    }
}
