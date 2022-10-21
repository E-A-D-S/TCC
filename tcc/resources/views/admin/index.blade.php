<h1>dashboard</h1>
<table class="table">
    <thead>
      <tr>

        <th scope="col">Nome</th>
        <th scope="col">idade</th>
        <th scope="col">cidade</th>
        <th scope="col">motivo</th>
        <th scope="col">ações</th>

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
        <td>
          <form action="{{route('paciente.destroy',$patient->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">deletar</button>
            <a href="{{route('paciente.edit',$patient->id)}}" class="btn btn-primary">editar</a>
            <a href="{{route('paciente.view',$patient->id)}}" class="btn btn-primary">Visualizar</a>
            <a href="">imprimir</a>
        </td>


      </tr>
      @endforeach

    </tbody>
  </table>