@extends('base')
@section('content')
<form class="" action="{{route('update-cliente', $cliente->id)}}" method="post">
@csrf

  <div class="">

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="nome" placeholder="{{$cliente->nome}}" value="{{$cliente->nome}}">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">CPF</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="CPF" placeholder="{{$cliente->CPF}}" value="{{$cliente->CPF}}">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">e-mail</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="email" placeholder="{{$cliente->email}}" value="{{$cliente->email}}">
      </div>

      <button type="submit" class="btn btn-outline-success">Salvar</button>

  </div>

</form>
@endsection
