@extends('main')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Configurações do sistema do Portal de Dados</h1>
    </div>
    <div class="card-body">
        <div>
            <h2>Instruções de estilo:</h2><br>
            <b>{{ "<br>" }}</b>: quebra de linha<br>
            <b>{{"<b>"}}</b> e <b>{{"</b>"}}</b>: determina qual parte do texto ficará em negrito<br>
            <b>{{"<center>"}}</b> e <b>{{"</center>"}}</b>: determina qual parte do texto ficará centralizada<br>
            <b>{{"<hr>"}}</b>: cria linha horizontal<br>
            <b>{{"<i>"}}</b> e <b>{{"</i>"}}</b>: determina qual parte do texto ficará em itálico<br>
            <b>{{"<u>"}}</b> e <b>{{"</u>"}}</b>: determina qual parte do texto ficará sublinhado<br>
            <b>{{"<p>"}}</b> e <b>{{"</p>"}}</b>: cria uma parágrafo<br>
        </div><br>
    </div>
</div>
<br>


<div class="card">
    <div class="card-header">
        <h1>Configurações de e-mails</h1>
    </div>
    <div class="card-body">
        <div>
            <form action="/settings" method="post">
                @csrf
                <br>
                <h2>Pedidos</h2>
                 <div class="form-group">
                     <label for="assunto" >E-mail de <strong>criação</strong> de pedido</label>
                     <input type="text" name="criacao_pedido_mail" class="form-control" value="{{ $criacao_pedido_mail }}">
                     <br>
                     <div class="text-center"><input type="submit" value="Alterar" class="btn btn-primary"></div>
                 </div>
            </form>
        </div>
    </div>
</div>


@endsection('content')