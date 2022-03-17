<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['total', 'status_pedido', 'cliente_id'];

    protected $hiden = ['id'];

    public function clientes()
    {
      return $this->belongsTo('App\Cliente');
    }

    public function produtos()
    {
      return $this->belongsToMany('App\Produto', 'PedidoProduto');
    }
}
