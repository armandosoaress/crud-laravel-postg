@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome Fantasia</th>
      <th scope="col">CNPJ</th>

      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
      <th scope="col">Sobre</th>
      
    </tr>
  </thead>
  <tbody>
  
 
@foreach($empresas as $empresa)

<tr>
      <th scope="row">{{$empresa->id}}</th>
      <td>{{$empresa->nomef}}</td>
      <td>{{$empresa->cnpj}}</td>
 
      <td>  <button type="button" class="btn btn-success"><a href="editarempresa/{{$empresa->id}}">Editar</a></button>
    </td>
      
      <td>
   
        <form action="/deletarempresa/{{$empresa->id}}" method="post">
          @csrf
          @method('delete')
<button type="submit" class="btn btn-danger">Deletar</button>
<td>  <button type="button" class="btn btn-success"><a href="sobre/{{$empresa->id}}">Sobre</a></button>
        
        </form></td>
    </tr>





@endforeach
</tbody>
</table>


@endsection

