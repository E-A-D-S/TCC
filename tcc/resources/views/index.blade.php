@extends('layout')
@section('scriptsjs')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(function() {
  $('#cpf').mask('000.000.000.00');
  $('#rg').mask('00.000.000-0');
  $('#phone').mask('(00) 00000-0000');
  $('#hora').mask('00:00 horas');
})
</script>
@endsection
@section('title','home' )
@section('content')

  <div class="nav px-5 d-flex align-items-center justify-content-between">
    <a href="{{ route('paciente.home') }}"><img src="/img/ulbra.png" alt="" width="100" height="100"></a>
    <a href="{{ route('paciente.index') }}" class="text-white">admin</a>
  </div>
  
  <div class="text-center py-3">
    <h1>Formulario</h1>
  </div>

<div class="px-5 mb-5">
  <form action="/paciente/store" method="post" style="display: flex; flex-direction:column;">
    @csrf
    <div class="d-flex">
      <div class="mb-3 w-50">
        <label class="form-label"> Nome Completo </label>
        <input type="text" name="name" placeholder="Ex. Eduardo da costa" class="form-control">
      </div>
  
      <div class="mb-3 w-25 mx-2">
        <label  class="form-label"> Data de Nascimento </label>
        <input type="date" name="birth_date" placeholder="Ex. 10/10/2020" id="idade" class="form-control">
      </div>
  
      <div class="mb-3 w-25">
        <label  class="form-label"> Idade </label>
        <input type="number" name="age" placeholder="Ex. 28 " class="form-control">
      </div>

      <div  class="mb-3 w-25 ms-2">
        <label  class="form-label"> Estado civil</label>
        <input type="text" name="marital_status" placeholder="Ex. Seu Pai" class="form-control">
      </div>
    </div>
    <div class="d-flex">
      <div  class="mb-3 w-50">
        <label  class="form-label"> Responsável </label>
        <input type="text" name="name_father" placeholder="Ex. Seu Pai" class="form-control">
      </div>
  
      <div class="mb-3 w-25 mx-2">
        <label  class="form-label"> Endereco do Responsável </label>
        <input type="text" name="address_father" placeholder="Ex. Rua candelaria" class="form-control">
      </div>
  
      <div  class="mb-3 w-25">
        <label  class="form-label"> Cidade do Responsável </label>
        <input type="text" name="city_father" placeholder="Ex. rio" class="form-control">
      </div>
    </div>

    <div class="d-flex">
      <div class="mb-3 w-25">
        <label  class="form-label"> Telefone </label>
        <input type="text" name="telephone" placeholder="Ex: (00) 00000-0000" id="phone" class="form-control">
      </div>

      <div class="mb-3 w-25 mx-2">
        <label  class="form-label"> RG </label>
        <input type="text" name="rg" placeholder="Ex: 43.234.343-6" id="rg" class="form-control">
      </div>

      <div class="mb-3 w-25">
        <label  class="form-label"> CPF </label>
        <input type="text" name="cpf" placeholder="Ex: 234.543.123.09" id="cpf" class="form-control">
      </div>

    </div>

    <div class="d-flex">
      <div class="mb-3 w-25">
        <label  class="form-label"> Endereco </label>
        <input type="text" name="address" placeholder="Ex. Rua candelaria" class="form-control">
      </div>
  
      <div class="mb-3 w-25 mx-2">
        <label  class="form-label"> complemento </label>
        <input type="text" name="Complement" placeholder="Ex. Rua candelaria" class="form-control">
      </div>

      <div class="mb-3 w-25">
        <label  class="form-label"> Numero da casa </label>
        <input type="text" name="house_number" placeholder="Ex. Rua candelaria" class="form-control">
      </div>

      <div class="mb-3 w-25 mx-2">
        <label  class="form-label"> Cidade </label>
        <input type="text" name="city" placeholder="Ex. Rua candelaria" class="form-control">
      </div>

      <div class="mb-3 w-25">
        <label  class="form-label"> Bairro </label>
        <input type="text" name="district" placeholder="Ex. Rua candelaria" class="form-control">
      </div>
    </div>

    <div class="mb-3">
      <label  class="form-label"> horário para atendimento </label>
      <input type="string" name="time_service" placeholder="Ex. 14:00" id="hora" class="form-control">
    </div>

    <div class="mb-3">
      <label  class="form-label"> Motivo da Consulta </label>
      <textarea name="consultation" class="form-control" placeholder="Ex. Ansiedade"></textarea>
    </div>

    <button type="submit" class="btn btn-dark"> Enviar</button>

  </form>
</div>

<style>
.nav {
  background-color: #585dd6;
}
</style>

@endsection