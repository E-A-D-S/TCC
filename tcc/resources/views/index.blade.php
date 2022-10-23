@extends('layout')
@section('titles','home' )
@section('content')
    <a href="{{ route('paciente.index') }}">admin</a>
        <h1>Formulario</h1>

    <div class="px-5">
        <form action="/paciente/store" method="post" style="display: flex; flex-direction:column;">
            @csrf
            <div class="mb-3">
                <label class="form-label"> Nome Completo </label>
                <input type="text" name="name" placeholder="Ex. Eduardo da costa" class="form-control">
            </div>

            <div class="mb-3">
                <label  class="form-label"> Data de Nascimento </label>
                <input type="date" name="birth_date" placeholder="Ex. 10/10/2020" class="form-control">
            </div>

            <div  class="mb-3">
                <label  class="form-label"> Idade </label>
                <input type="number" name="age" placeholder="Ex. 28 " class="form-control">
            </div>

            <div  class="mb-3">
                <label  class="form-label"> Estado civil</label>
                <input type="text" name="marital_status" placeholder="Ex. Seu Pai" class="form-control">
            </div>

            <div  class="mb-3">
                <label  class="form-label"> Responsável </label>
                <input type="text" name="name_father" placeholder="Ex. Seu Pai" class="form-control">
            </div>

            <div  class="mb-3">
                <label  class="form-label"> Endereco do Responsável </label>
                <input type="text" name="address_father" placeholder="Ex. Rua candelaria" class="form-control">
            </div>

            <div  class="mb-3">
                <label  class="form-label"> Cidade do Responsável </label>
                <input type="text" name="city_father" placeholder="Ex. rio" class="form-control">
            </div>

            <label  class="form-label"> Telefone </label>
            <input type="text" name="telephone" placeholder="Ex. 51-999999999" class="form-control">

            <label  class="form-label"> RG </label>
            <input type="text" name="rg" placeholder="Ex. 9993808850"  class="form-control">

            <label  class="form-label"> CPF </label>
            <input type="text" name="cpf" placeholder="Ex. 9993808850" class="form-control">

            <label  class="form-label"> Endereco </label>
            <input type="text" name="address" placeholder="Ex. Rua candelaria" class="form-control">

            <label  class="form-label"> complemento </label>
            <input type="text" name="Complement" placeholder="Ex. Rua candelaria" class="form-control">

            <label  class="form-label"> Numero da casa </label>
            <input type="text" name="house_number" placeholder="Ex. Rua candelaria" class="form-control">

            <label  class="form-label"> City </label>
            <input type="text" name="city" placeholder="Ex. Rua candelaria" class="form-control">

            <label  class="form-label"> Bairro </label>
            <input type="text" name="district" placeholder="Ex. Rua candelaria" class="form-control">

            <label  class="form-label"> horário para atendimento </label>
            <input type="string" name="time_service" placeholder="Ex. 10:00" class="form-control">
            
            <label  class="form-label"> Motivo da Consulta </label>
            <textarea name="consultation" placeholder="Ex. Ansiedade"></textarea>

        <button type="submit"> Enviar</button>

        </form>
    </div>
</div>

@endsection