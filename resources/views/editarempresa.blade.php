@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="/updateempresa/{{$empresa->id}}" method="POST">
        @csrf
        @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nome Fantasia</label>
    <input type="text" name='nomef' maxlength="5" value='{{$empresa->nomef}}' class="form-control" id="nome"  placeholder="nome fantasia">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CNPJ</label>
    <input type="text" name='cnpj' value='{{$empresa->cnpj}}' class="form-control" id="cnpj" placeholder="CNPJ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data de Fundação</label>
    <input type="text" name='dataf' value='{{$empresa->dataf}}' class="form-control" id="data" placeholder="DATA">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail comercial</label>
    <input type="text" name='emailc'  value='{{$empresa->emailc}}' class="form-control" id="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="text" name='telefone'  value='{{$empresa->telefone}}' class="form-control" id="telefone" placeholder="telefone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CEP</label>
    <input type="text" name='cep'  value='{{$empresa->cep}}' class="form-control" id="cep" placeholder="cep">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Endereço</label>
    <input type="text" name='endereco'  value='{{$empresa->endereco}}' class="form-control" id="cidade" placeholder="Endereço">
  </div>
 <p></p>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>


@endsection

