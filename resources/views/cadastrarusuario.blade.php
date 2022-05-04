@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="enviarusuarios" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name='nome' class="form-control" id="nome"  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input type="text" name='login' class="form-control" id="login" placeholder="login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name='senha' class="form-control" id="senha" placeholder="senha">
  </div>
 <p></p>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection

