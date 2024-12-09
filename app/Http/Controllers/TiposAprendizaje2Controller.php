<?php

namespace App\Http\Controllers;

use App\Models\TiposAprendizaje2;
use Illuminate\Http\Request;
use App\Models\AlumnosGrado2; // Relación con alumnos del segundo grado

/**
 * Class TiposAprendizaje2Controller
 * @package App\Http\Controllers
 */
class TiposAprendizaje2Controller extends Controller
{
    /**
     * Muestra una lista de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposAprendizaje2s = TiposAprendizaje2::paginate(10);

        return view('tipos-aprendizaje2.index', compact('tiposAprendizaje2s'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposAprendizaje2s->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obtiene los alumnos no registrados en la tabla de tipos de aprendizaje
        $alumnos = AlumnosGrado2::whereNotIn('id', TiposAprendizaje2::pluck('alumno_id'))->pluck('nombre_alumno', 'id');
        
        $tiposAprendizaje2 = new TiposAprendizaje2();
        return view('tipos-aprendizaje2.create', compact('tiposAprendizaje2', 'alumnos'));
    }

    /**
     * Almacena un nuevo recurso en la base de datos.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'alumno_id' => 'required|exists:alumnos_grado_2,id',
            'estilo' => 'required|in:visual,auditivo,kinestesico',
            'ritmo' => 'required|in:rapido,moderado,lento',
        ]);

        // Verificar que el alumno no tenga un registro existente
        if (TiposAprendizaje2::where('alumno_id', $request->alumno_id)->exists()) {
            return redirect()->back()->with('error', 'El alumno ya tiene un tipo de aprendizaje registrado.');
        }

        // Obtener el nombre del alumno
        $alumno = AlumnosGrado2::find($request->alumno_id);

        // Crear el registro
        TiposAprendizaje2::create([
            'alumno_id' => $request->alumno_id,
            'nombre' => $alumno->nombre_alumno,
            'estilo' => $request->estilo,
            'ritmo' => $request->ritmo,
        ]);

        return redirect()->route('tipos-aprendizaje2s.index')
            ->with('success', 'Tipo de aprendizaje creado exitosamente.');
    }

    /**
     * Muestra un recurso específico.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposAprendizaje2 = TiposAprendizaje2::findOrFail($id);

        return view('tipos-aprendizaje2.show', compact('tiposAprendizaje2'));
    }

    /**
     * Muestra el formulario para editar un recurso específico.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposAprendizaje2 = TiposAprendizaje2::findOrFail($id);

        return view('tipos-aprendizaje2.edit', compact('tiposAprendizaje2'));
    }

    /**
     * Actualiza un recurso en la base de datos.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposAprendizaje2 $tiposAprendizaje2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposAprendizaje2 $tiposAprendizaje2)
    {
        // Validación de los datos
        $request->validate([
            'estilo' => 'required|in:visual,auditivo,kinestesico',
            'ritmo' => 'required|in:rapido,moderado,lento',
        ]);

        $tiposAprendizaje2->update($request->all());

        return redirect()->route('tipos-aprendizaje2s.index')
            ->with('success', 'Tipo de aprendizaje actualizado exitosamente.');
    }

    /**
     * Elimina un recurso de la base de datos.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        TiposAprendizaje2::findOrFail($id)->delete();

        return redirect()->route('tipos-aprendizaje2s.index')
            ->with('success', 'Tipo de aprendizaje eliminado exitosamente.');
    }
}
