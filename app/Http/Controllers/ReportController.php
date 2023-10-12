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

        // POR MUNICIPIO
        $consulta = Paciente::select('pacientes.residencia', 'casos.tipo', 'casos.sospecha', 'casos.reincidencia')
        ->leftJoin('casos', 'pacientes.id', '=', 'casos.paciente_id')
        ->get()
        ->groupBy('residencia');

        // POR GRUPO ETAREO
        $consulta_etareo= Paciente::select('pacientes.edad')
        ->leftJoin('casos', 'pacientes.id', '=', 'casos.paciente_id')
        ->get();

        $ninos=0;
        $adolescentes=0;
        $adultos=0;
        $adultosm=0;

        foreach ($consulta_etareo as $edades) {
            if($edades->edad >= 0 && $edades->edad <= 12)
            $ninos=$ninos+1;
            if($edades->edad >= 13 && $edades->edad <= 17)
            $adolescentes=$adolescentes+1;
            if($edades->edad >= 18 && $edades->edad <= 64)
            $adultos=$adultos+1;
            if($edades->edad >= 65)
            $adultosm=$adultosm+1;
        }

        // POR SEXO
        $consulta_sexo= Paciente::select('pacientes.sexo')
        ->leftJoin('casos', 'pacientes.id', '=', 'casos.paciente_id')
        ->get();

        $mujeres=0;
        $hombres=0;

        foreach ($consulta_sexo as $sexos) {
            if($sexos->sexo == 'h')
            $hombres=$hombres+1;
            if($sexos->sexo == 'm')
            $mujeres=$mujeres+1;
        }
        

        $pdf = PDF::loadView('reportecasos', ['casos' => $casos, 'consulta'=> $consulta, 'ninos'=> $ninos,
                                                'adolescentes' => $adolescentes, 'adultos' => $adultos, 
                                                'adultosm' => $adultosm, 'hombres' => $hombres, 'mujeres' => $mujeres]);

        return $pdf->stream();
    }

    public function reporteCasosFiltrado(Request $request){
        return $request;
        $casos = Caso::get();
        $pacientes = Paciente::get();
    }
}
