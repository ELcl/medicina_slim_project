<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Caso;

use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function reporteUsuario()
    {   $pacientes = Paciente::get();
        $pdf = PDF::loadView('reporteusuarios', ['pacientes' => $pacientes]);

        return $pdf->stream();
    }
    
    public function reporteCasos()
    {   $casos = Caso::get();
        $pdf = PDF::loadView('reportecasos', ['casos' => $casos]);

        return $pdf->stream();
    }
}
