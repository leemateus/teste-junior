@extends('base')

@section('content')

  <form class="" action="{{route('store-cliente')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">CPF</label>
      <input type="text" class="form-control" name="CPF" placeholder="">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">e-mail</label>
      <input type="text" class="form-control" name="email" placeholder="">
    </div>

    <button type="submit" class="btn btn-outline-success">Salvar</button>
  </form>

@endsection
