@extends('layout')
@section('title','dashboard' )
@section('content')

<div class="nav px-5 d-flex align-items-center justify-content-between">
  <a href="{{ route('paciente.home') }}"><img src="/img/ulbra.png" alt="" width="100" height="100"></a>
  <a href="{{ route('paciente.home') }}" class="text-white">Voltar</a>
</div>

<div class="text-center">
  <h1 class="py-3">dashboard</h1>
</div>
<div class="px-5">
  <table class="table table-dark table-striped">
      <thead>
        <tr>
  
          <th scope="col">Nome</th>
          <th scope="col">idade</th>
          <th scope="col">cidade</th>
          <th scope="col">motivo</th>
          <th scope="col" class="text-center">ações</th>
  
        </tr>
      </thead>
      <tbody>
  
        @foreach($patient as $patient)
        <tr>
          <td>
            <p>{{ $patient->name }}</p>
          </td>
          <td>
            <p>{{ $patient->age }}</p>
          </td>
          <td>
            <p>{{ $patient->city }}</p>
          </td>
          <td>
            <p>{{ $patient->consultation }}</p>
          </td>
          <td class="text-center">
            <form action="{{route('paciente.destroy',$patient->id)}}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">deletar</button>
              <a href="{{route('paciente.edit',$patient->id)}}" class="btn btn-primary">editar</a>
              <a href="{{route('paciente.view',$patient->id)}}" class="btn btn-info">Visualizar</a>
              <a href="{{route('paciente.generatePdf',$patient->id)}}" target="_blank" class="btn btn-warning">imprimir</a>
          </td>
        </tr>
        @endforeach
  
      </tbody>
    </table>
</div>

<style>
  .nav {
    background-color: #585dd6;
  }
</style>
@endsection