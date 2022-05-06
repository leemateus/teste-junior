@extends('base')
@section('content')

<form class="" action="" method="post">

  <label>Selecionar quantidade</label>
  <br>
  <label>Produto: {{$produto->nome}}</label>
  <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Quantidade Desejada</label>
    <select class="form-select" id="inputGroupSelect01">
      @for($i = $produto->quant_prod; $i > 0; $i--)
        <option value="$i">{{$i}}</option>
      @endfor
    </select>
  </div>

</form>

@endsection
