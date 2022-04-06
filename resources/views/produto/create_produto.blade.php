@extends('base')
@section('content')
<form class="" action="{{route('store-produto')}}" method="post">
@csrf
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="">
  </div>

  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Quantidade em Estoque</label>
    <input type="text" class="form-control" name="quant_prod" placeholder="">
  </div>

  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Código de Barras</label>
    <input type="text" class="form-control" name="cod_barra" placeholder="">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">R$</span>
    <span class="input-group-text">00000.00</span>
    <input type="text" class="form-control" name="valor_unitario" aria-label="Dollar amount (with dot and two decimal places)">
  </div>

  <button type="submit" class="btn btn-outline-success">Salvar</button>

</form>

@endsection
