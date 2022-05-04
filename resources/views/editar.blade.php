@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="/update/{{$alunos->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name='name' value='{{$alunos->name}}' class="form-control" id="nome"  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input type="text" value='{{$alunos->login}}' name='login' class="form-control" id="login" placeholder="login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password"  value='{{$alunos->senha}}' name='senha' class="form-control" id="senha" placeholder="senha">
  </div>
 <p></p>
 
  <button type="submit" class="btn btn-primary">Editar</button>
</form>


@endsection

