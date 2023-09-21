<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Caso;

// Importando para la libreria en PDF
use Barryvdh\DomPDF\Facade\Pdf;

// Importando para la Query Builder
use Illuminate\Support\Facades\DB;



class ReportController extends Controller
{
    public function reporteUsuario()
    {   $pacientes = Paciente::get();
        $pdf = PDF::loadView('reporteusuarios', ['pacientes' => $pacientes]);

        return $pdf->stream();
    }
    
    public function reporteCasos()
    {   
        $casos = Caso::get();
        $pacientes = Paciente::get();

        $consulta = Paciente::select('pacientes.residencia', 'casos.tipo', 'casos.sospecha', 'casos.reincidencia')
        ->leftJoin('casos', 'pacientes.id', '=', 'casos.paciente_id')
        ->get()
        ->groupBy('residencia');

        $pdf = PDF::loadView('reportecasos', ['casos' => $casos, 'consulta'=> $consulta]);

        return $pdf->stream();
    }

    public function reporteCasosFiltrado(Request $request){
        return $request;
        $casos = Caso::get();
        $pacientes = Paciente::get();


    }
}
