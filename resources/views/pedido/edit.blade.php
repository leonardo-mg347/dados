@extends('pedidos')

@section('content')
<div class="row d-flex flex-column align-items-center">
    <h1>Editar solicitação</h1>
    <form action="pedidos/{{ $pedido->id }}" method="post" class="w-50" name="status">
        @csrf
        @method('patch')
        @include('pedido.partials.form')
        <br><br>
        <button type="submit" name="status" value="Em Análise"  class="btn btn-warning">Mandar para análise</button>
        <button type="submit" name="status" value="Em Produção"  class="btn btn-secondary">Colocar em Produção</button>
        <button type="submit" name="status" value="Esperando Validação"  class="btn btn-info">Seguir para Validação</button>
        <button type="submit" name="status" value="Finalizado"  class="btn btn-success">Finalizar</button>
        <button type="submit" name="status" value="Rejeitado" class="btn btn-danger">Rejeitar</button>
    </form>
</div>

@endsection('content')