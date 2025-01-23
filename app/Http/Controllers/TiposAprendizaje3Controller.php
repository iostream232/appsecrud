<?php

namespace App\Http\Controllers;

use App\Models\TiposAprendizaje3;
use App\Models\AlumnosGrado3;  // Relación con AlumnosGrado3
use Illuminate\Http\Request;

/**
 * Class TiposAprendizaje3Controller
 * @package App\Http\Controllers
 */
class TiposAprendizaje3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los registros de TiposAprendizaje3 con paginación
        $tiposAprendizaje3s = TiposAprendizaje3::paginate(10);

        return view('tipos-aprendizaje3.index', compact('tiposAprendizaje3s'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposAprendizaje3s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obtener los alumnos de AlumnosGrado3 que no han sido asignados en TiposAprendizaje3
        $alumnos = AlumnosGrado3::whereNotIn('id', TiposAprendizaje3::pluck('alumno_id'))->pluck('nombre_alumno', 'id');

        // Crear una nueva instancia vacía de TiposAprendizaje3
        $tiposAprendizaje3 = new TiposAprendizaje3();

        return view('tipos-aprendizaje3.create', compact('tiposAprendizaje3', 'alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        request()->validate([
            'alumno_id' => 'required|exists:alumnos_grado_3,id',
            'estilo' => 'required|in:visual,auditivo,kinestesico',
            'ritmo' => 'required|in:rapido,moderado,lento',
        ]);

        // Obtener el alumno correspondiente usando el alumno_id
        $alumno = AlumnosGrado3::find($request->alumno_id);

        // Verificar si el alumno existe
        if (!$alumno) {
            return redirect()->back()->with('error', 'Alumno no encontrado');
        }

        // Crear el nuevo registro en TiposAprendizaje3
        TiposAprendizaje3::create([
            'alumno_id' => $request->alumno_id,
            'nombre' => $alumno->nombre_alumno,  // Asignar el nombre del alumno
            'estilo' => $request->estilo,
            'ritmo' => $request->ritmo,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('tipos-aprendizaje3s.index')
            ->with('success', 'Tipo de Aprendizaje creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposAprendizaje3 = TiposAprendizaje3::find($id);

        return view('tipos-aprendizaje3.show', compact('tiposAprendizaje3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposAprendizaje3 = TiposAprendizaje3::find($id);

        return view('tipos-aprendizaje3.edit', compact('tiposAprendizaje3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposAprendizaje3 $tiposAprendizaje3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposAprendizaje3 $tiposAprendizaje3)
    {
        // Validar los datos del formulario
        request()->validate([
            'alumno_id' => 'required|exists:alumnos_grado_3,id',
            'estilo' => 'required|in:visual,auditivo,kinestesico',
            'ritmo' => 'required|in:rapido,moderado,lento',
        ]);

        // Actualizar el registro
        $tiposAprendizaje3->update($request->all());

        // Redirigir con mensaje de éxito
        return redirect()->route('tipos-aprendizaje3s.index')
            ->with('success', 'Tipo de Aprendizaje actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el registro
        TiposAprendizaje3::find($id)->delete();

        // Redirigir con mensaje de éxito
        return redirect()->route('tipos-aprendizaje3s.index')
            ->with('success', 'Eliminado con éxito');
    }
}
