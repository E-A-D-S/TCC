<?php

namespace App\Http\Controllers;


use App\Models\Patient;
use Illuminate\Http\Request;

class UserController extends Controller
{

  function home () {
    return View('index');
  }

  function index()
  {
   $patient = Patient::all();
    return view('admin.index', compact('patient'));
  }

  public function create(Request $request)
  {
    $request->validate([
      'nome' => 'required',
      'nascimento' => 'required',
      'idade' => 'required',
      'responsavel' => 'required',
      'telefone' => 'required',
      'RG' => 'required',
      'endereco' => 'required',
      'motivoconsulta' => 'required',

          
    ]);
    $data = array(
      'nome'=> $request->nome,
      'nascimento' => $request->nascimento,
      'idade' => $request->idade,
      'responsavel' => $request->responsavel,
      'telefone' => $request->telefone,
      'RG' => $request->RG,
      'endereco' => $request->endereco,
      'motivoconsulta' => $request->motivoconsulta,
      
    );
    return redirect()->route('index', compact('result')); 
  }

  public function store(Request $request)
  {
    $patient  = new Patient();
    
    $patient->name = $request->name;
    $patient->address = $request->address;
    $patient->rg = $request->rg;
    $patient->cpf = $request->cpf;
    $patient->birth_date = $request->birth_date;
    $patient->age = $request->age;
    $patient->telephone = $request->telephone;
    $patient->time_service = $request->time_service;
    $patient->consultation = $request->consultation;
    $patient->marital_status = $request->marital_status;
    $patient->house_number = $request->house_number;
    $patient->district = $request->district;
    $patient->Complement = $request->Complement;
    $patient->city = $request->city;
    $patient->name_father = $request->name_father;
    $patient->address_father = $request->address_father;
    $patient->city_father = $request->city_father;
      
    $patient ->save();
    return redirect()->route('paciente.home')->with('categoriacad', 'Produto cadastrado com sucesso!');
  }

  public function destroy($id)
  {
    $Patient = Patient::find($id);
    if (!$Patient) {
      return redirect()->route('category.index');
    }
    $Patient->delete();
    return redirect()->route('paciente.index')->with('categoriadel', 'Produto deletado com sucesso!');
  }

  public function edit($id)
  {
    $patient = Patient::find($id);
    if (!$patient) {
      return redirect()->route('paciente.index');
    }

    return view('admin.edit', compact('patient'));
  }

  public function view($id)
  {
    $patient = Patient::find($id);
    if (!$patient) {
      return redirect()->route('paciente.index');
    }

    return view('admin.view', compact('patient'));
  }

  public function update(Request $request)
  {
    Patient::findOrfail($request->id)->update($request->all());
    return redirect()->route('paciente.index')->with('categoriaedit', 'Produto editado com sucesso!');
  }
    
}
