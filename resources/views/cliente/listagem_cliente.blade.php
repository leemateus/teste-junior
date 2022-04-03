@extends('base')
@section('content')

  <div class="">
    @foreach ($clientes as $cliente)
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$cliente->nome}}" disabled>
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">CPF</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$cliente->CPF}}" disabled>
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">e-mail</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$cliente->email}}" disabled>
      </div>

      <a href="{{route('edit-cliente', $cliente->id)}}">Editar dados do Cliente</a>
      <hr>
    @endforeach

  </div>

@endsection
