<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->usingnedBigInteger('quant_pedido');
            $table->usingnedBigInteger('pedido_id');
            $table->usingnedBigInteger('produto_id');

            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('casdade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('casdade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
