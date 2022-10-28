<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Patient;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
  
  function home () {
    return View('index');
  }
  function homeScreen () {
    return View('homeScreen');
  }

  function index()
  {
   $patient = Patient::all();
    return view('admin.index', compact('patient'));
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

    $data = array(
      'name'=> $request->name,
      'birth_date' => $request->birth_date,
      'time_service' => $request->time_service,
      'consultation' => $request->consultation,
    );
    Mail::to(config('mail.from.address'))->send(new SendMail($data));
    return redirect()->route('paciente.home')->with('paciente', 'Cadastrado feito com sucesso!');
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

  public function generatePdf($id)
  {
    $data = Patient::find($id);
    $pdf = Pdf::loadView('pdf.dicePatient', compact('data'));
    return $pdf->stream('dicePatient.pdf');
  }
    
}
