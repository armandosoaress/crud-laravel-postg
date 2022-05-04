@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="enviarempresas" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome Fantasia</label>
    <input type="text" name='nomef'minlength="5" class="form-control" id="nome"  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CNPJ</label>
    <input type="text" name='cnpj' class="form-control" id="cnpj" placeholder="CNPJ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data de Fundação</label>
    <input type="text" name='dataf' class="form-control" id="data" placeholder="DATA">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail comercial</label>
    <input type="text" name='emailc' class="form-control" id="E-mail" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="text" name='telefone' class="form-control" id="telefone" placeholder="telefone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CEP</label>
    <input type="text" name='cep' class="form-control" id="cep" placeholder="cep">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Endereço</label>
    <input type="text" name='endereco' class="form-control" id="cidade" placeholder="cidade">
  </div>
 <p></p>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>









@endsection

