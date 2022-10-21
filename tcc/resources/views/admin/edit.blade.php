<form action="{{route('paciente.update',$patient->id)}}" method="post" style="display:flex; flex-direction:column;">
    @csrf
    @method('put')

    <label> Nome Completo </label>
    <input type="text" name="name"  value="{{$patient->name}}" placeholder="Ex. Eduardo da costa">

    <label> Data de Nascimento </label>
    <input type="date" name="birth_date"  value="{{$patient->birth_date}}" placeholder="Ex. 10/10/2020">

    <label> Idade </label>
    <input type="number" name="age"  value="{{$patient->age}}" placeholder="Ex. 28 ">

    <label> Estado civil</label>
    <input type="text" name="marital_status"  value="{{$patient->marital_status}}" placeholder="Ex. Seu Pai">


    <label> Responsável </label>
    <input type="text" name="name_father"  value="{{$patient->name_father}}" placeholder="Ex. Seu Pai">

    <label> Endereco do Responsável </label>
    <input type="text" name="address_father"  value="{{$patient->address_father}}" placeholder="Ex. Rua candelaria">

    <label> Cidade do Responsável </label>
    <input type="text" name="city_father"  value="{{$patient->city_father}}" placeholder="Ex. rio">

    <label> Telefone </label>
    <input type="text" name="telephone"  value="{{$patient->telephone}}" placeholder="Ex. 51-999999999">

    <label> RG </label>
    <input type="text" name="rg"  value="{{$patient->rg}}" placeholder="Ex. 9993808850">

    <label> CPF </label>
    <input type="text" name="cpf"  value="{{$patient->cpf}}" placeholder="Ex. 9993808850">

    <label> Endereco </label>
    <input type="text" name="address"  value="{{$patient->address}}" placeholder="Ex. Rua candelaria">

    <label> complemento </label>
    <input type="text" name="Complement"  value="{{$patient->Complement}}" placeholder="Ex. Rua candelaria">

    <label> Numero da casa </label>
    <input type="text" name="house_number"  value="{{$patient->house_number}}" placeholder="Ex. Rua candelaria">

    <label> City </label>
    <input type="text" name="city"  value="{{$patient->city}}" placeholder="Ex. Rua candelaria">

    <label> Bairro </label>
    <input type="text" name="district"  value="{{$patient->district}}" placeholder="Ex. Rua candelaria">

    <label> horário para atendimento </label>
    <input type="string" name="time_service"  value="{{$patient->time_service}}" placeholder="Ex. 10:00">
    
    <label> Motivo da Consulta </label>
    <input type="text"  value="{{$patient->consultation}}" disabled>
    <textarea name="consultation"  placeholder="Ex. Ansiedade"></textarea>

    <button type="submit" class="btn btn-primary mt-3">editar</button>
  </form>