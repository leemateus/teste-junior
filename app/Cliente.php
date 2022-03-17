<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'CPF', 'email'];

    protected $hiden = ['id'];

    public function pedidos()
    {
      return $this->hasMany('App\Pedido');
    }
}
