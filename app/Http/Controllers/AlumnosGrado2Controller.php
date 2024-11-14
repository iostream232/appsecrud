<?php

namespace App\Http\Controllers;

use App\Models\AlumnosGrado2;
use Illuminate\Http\Request;

/**
 * Class AlumnosGrado2Controller
 * @package App\Http\Controllers
 */
class AlumnosGrado2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnosGrado2s = AlumnosGrado2::paginate(10);

        return view('alumnos-grado2.index', compact('alumnosGrado2s'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnosGrado2s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnosGrado2 = new AlumnosGrado2();
        return view('alumnos-grado2.create', compact('alumnosGrado2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AlumnosGrado2::$rules);

        $alumnosGrado2 = AlumnosGrado2::create($request->all());

        return redirect()->route('alumnos-grado2s.index')
            ->with('success', 'AlumnosGrado2 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnosGrado2 = AlumnosGrado2::find($id);

        return view('alumnos-grado2.show', compact('alumnosGrado2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnosGrado2 = AlumnosGrado2::find($id);

        return view('alumnos-grado2.edit', compact('alumnosGrado2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AlumnosGrado2 $alumnosGrado2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlumnosGrado2 $alumnosGrado2)
    {
        request()->validate(AlumnosGrado2::$rules);

        $alumnosGrado2->update($request->all());

        return redirect()->route('alumnos-grado2s.index')
            ->with('success', 'AlumnosGrado2 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumnosGrado2 = AlumnosGrado2::find($id)->delete();

        return redirect()->route('alumnos-grado2s.index')
            ->with('success', 'AlumnosGrado2 deleted successfully');
    }
}
