<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;

class AsistenciaController extends Controller
{
    public function registrarAsistencia(Request $request)
    {
        $fecha = $request->input('fecha');
        $docentes = $request->input('docentes'); // suponiendo que los docentes están seleccionados

        foreach ($docentes as $docenteId) {
            Asistencia::create([
                'docente_id' => $docenteId,
                'fecha' => $fecha,
                'presente' => true, // aquí podrías tener algún mecanismo para marcar ausente
            ]);
        }

        return redirect()->back()->with('success', 'Asistencias registradas con éxito');
    }
}
