@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Data de fundação</th>
      <th scope="col">E-mail comercial	</th>
      <th scope="col">Telefone</th>
      <th scope="col">CEP</th>
      <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$empresa->dataf}}</td>
      <td>{{$empresa->emailc}}</td>
      <td>{{$empresa->telefone}}</td>
      <td> {{$empresa->cep}}</td>
      <td> {{$empresa->endereco}}</td>

     
    </tr>

  </tbody>
</table>


@endsection

