@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Senha</th>
      <th scope="col">Deletar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
  
 
@foreach($alunos as $aluno)

<tr>
      <th scope="row">{{$aluno->id}}</th>
      <td>{{$aluno->name}}</td>
      <td>{{$aluno->login}}</td>
      <td>{{$aluno->senha}}</td>
      <td>  <button type="button" class="btn btn-success"><a href="editar/{{$aluno->id}}">Editar</a></button>
    </td>
      
      <td>
   
        <form action="/deletar/{{$aluno->id}}" method="post">
          @csrf
          @method('delete')
<button type="submit" class="btn btn-danger">Deletar</button>
        
        </form></td>
    </tr>





@endforeach
</tbody>
</table>


@endsection

