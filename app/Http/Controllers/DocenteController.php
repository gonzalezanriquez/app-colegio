<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de usar "App\Models" en lugar de "app\Models"

class DocenteController extends Controller
{
    public function listarDocentes()
    {
        $docentes = User::all(); // Obtén todos los docentes

        return view('docentes.index', compact('docentes'));
    }
}
