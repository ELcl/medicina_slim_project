<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Caso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // dd(auth()->user()->id);
        if(auth()->user()->id == 2){
            // dd('admin');
            $pacientes = Paciente::get();
        }else{
            // dd('interno');
            $pacientes = Paciente::where('user_id', auth()->user()->id)->get();
        }
        return view ('pacientes.index', ['pacientes' => $pacientes]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'nombre' =>'required',
            'edad' => 'numeric| min:1 | required',
            'sexo' => 'required',
            'residencia' => 'required',
            'ocupacion' => 'required',
            'fuente' => 'required',
            'confiabilidad' => 'required',
            'llegada' => 'required',

            'violencia' => 'alpha | nullable',
            'reincidencia' => 'alpha | nullable',
            'sospecha' => 'alpha | nullable',
            'transferencia' => 'alpha | nullable',
        ]);

        // Paciente
        $paciente = new Paciente;
        $paciente->nombre = $request->nombre;
        $paciente->edad = $request->edad;
        $paciente->sexo = $request->sexo;
        $paciente->procedencia = $request->procedencia;
        $paciente->residencia = $request->residencia;
        $paciente->ocupacion = $request->ocupacion;
        $paciente->fuente_informacion = $request->fuente;
        $paciente->grado_confiabilidad = $request->confiabilidad;
        $paciente->forma_llegada = $request->llegada;
        $paciente->user_id = auth()->user()->id;

        $paciente->save();

        // return $paciente->id;

        // dd($paciente->id);

        // Caso
        $caso = new Caso;
        $caso->tipo = $request->violencia;
        $caso->sospecha = $request->sospecha;
        $caso->reincidencia = $request->reincidencia;
        $caso->transferencia = $request->transferencia;
        $caso->paciente_id = $paciente->id;

        $caso->save();
    
        return Redirect::route('pacientes.index')->with('status', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
