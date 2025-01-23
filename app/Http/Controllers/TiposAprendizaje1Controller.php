<?php

namespace App\Http\Controllers;

use App\Models\TiposAprendizaje1;
use Illuminate\Http\Request;
use App\Models\AlumnosGrado1;  // Asegúrate de que esta línea esté presente

/**
 * Class TiposAprendizaje1Controller
 * @package App\Http\Controllers
 */
class TiposAprendizaje1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposAprendizaje1s = TiposAprendizaje1::paginate(10);

        return view('tipos-aprendizaje1.index', compact('tiposAprendizaje1s'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposAprendizaje1s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    // Obtén solo los alumnos que no han sido registrados en la tabla tipos_aprendizaje_1
    $alumnos = AlumnosGrado1::whereNotIn('id', TiposAprendizaje1::pluck('alumno_id'))->pluck('nombre_alumno', 'id');

    // Crea una instancia vacía de TiposAprendizaje1
    $tiposAprendizaje1 = new TiposAprendizaje1();
    
    return view('tipos-aprendizaje1.create', compact('tiposAprendizaje1', 'alumnos'));
}

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validación de los campos
    request()->validate([
        'alumno_id' => 'required|exists:alumnos_grado_1,id',
        'estilo' => 'required|in:visual,auditivo,kinestesico',
        'ritmo' => 'required|in:rapido,moderado,lento',
    ]);

    // Obtener el nombre del alumno utilizando el alumno_id enviado
    $alumno = AlumnosGrado1::find($request->alumno_id); // Busca el alumno por el ID

    // Verificar que el alumno exista
    if (!$alumno) {
        return redirect()->back()->with('error', 'Alumno no encontrado');
    }

    // Crear el registro en la tabla TiposAprendizaje1
    TiposAprendizaje1::create([
        'alumno_id' => $request->alumno_id,
        'nombre' => $alumno->nombre_alumno,  // Obtén el nombre del alumno desde la base de datos
        'estilo' => $request->estilo,
        'ritmo' => $request->ritmo,
    ]);

    // Redirigir con éxito
    return redirect()->route('tipos-aprendizaje1s.index')
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
        $tiposAprendizaje1 = TiposAprendizaje1::find($id);

        return view('tipos-aprendizaje1.show', compact('tiposAprendizaje1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposAprendizaje1 = TiposAprendizaje1::find($id);

        return view('tipos-aprendizaje1.edit', compact('tiposAprendizaje1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposAprendizaje1 $tiposAprendizaje1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposAprendizaje1 $tiposAprendizaje1)
    {
        request()->validate(TiposAprendizaje1::$rules);

        $tiposAprendizaje1->update($request->all());

        return redirect()->route('tipos-aprendizaje1s.index')
            ->with('success', 'TiposAprendizaje1 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposAprendizaje1 = TiposAprendizaje1::find($id)->delete();

        return redirect()->route('tipos-aprendizaje1s.index')
            ->with('success', 'Eliminado con éxito');
    }
}
