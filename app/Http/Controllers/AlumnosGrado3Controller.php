<?php

namespace App\Http\Controllers;

use App\Models\AlumnosGrado3;
use Illuminate\Http\Request;

/**
 * Class AlumnosGrado3Controller
 * @package App\Http\Controllers
 */
class AlumnosGrado3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnosGrado3s = AlumnosGrado3::paginate(10);

        return view('alumnos-grado3.index', compact('alumnosGrado3s'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnosGrado3s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnosGrado3 = new AlumnosGrado3();
        return view('alumnos-grado3.create', compact('alumnosGrado3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AlumnosGrado3::$rules);

        $alumnosGrado3 = AlumnosGrado3::create($request->all());

        return redirect()->route('alumnos-grado3s.index')
            ->with('success', 'AlumnosGrado3 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnosGrado3 = AlumnosGrado3::find($id);

        return view('alumnos-grado3.show', compact('alumnosGrado3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnosGrado3 = AlumnosGrado3::find($id);

        return view('alumnos-grado3.edit', compact('alumnosGrado3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AlumnosGrado3 $alumnosGrado3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlumnosGrado3 $alumnosGrado3)
    {
        request()->validate(AlumnosGrado3::$rules);

        $alumnosGrado3->update($request->all());

        return redirect()->route('alumnos-grado3s.index')
            ->with('success', 'AlumnosGrado3 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumnosGrado3 = AlumnosGrado3::find($id)->delete();

        return redirect()->route('alumnos-grado3s.index')
            ->with('success', 'Eliminado con éxito');
    }
}
