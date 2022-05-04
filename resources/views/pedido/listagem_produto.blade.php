@extends('base')
@section('content')

<table class="table table-striped">
  <tr>
    @foreach ($produtos as $produto)
      <th>{{$produto->nome}}</th>
    @endforeach
  </tr>

  <tr>
    @foreach ($produtos as $produto)
      <td>{{$produto->valor_unitario}}</td>
    @endforeach
  </tr>

  <tr>
    @foreach ($produtos as $produto)
      <td>
        <a href="{{route('selectProdutoQuant-pedido', $produto->id)}}">Adicionar ao Carrinho</a>
      </td>
    @endforeach
  </tr>
</table>
@endsection
