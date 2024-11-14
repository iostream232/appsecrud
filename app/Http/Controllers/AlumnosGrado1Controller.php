<?php

namespace App\Http\Controllers;

use App\Models\AlumnosGrado1;
use Illuminate\Http\Request;

/**
 * Class AlumnosGrado1Controller
 * @package App\Http\Controllers
 */
class AlumnosGrado1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnosGrado1s = AlumnosGrado1::paginate(10);

        return view('alumnos-grado1.index', compact('alumnosGrado1s'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnosGrado1s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnosGrado1 = new AlumnosGrado1();
        return view('alumnos-grado1.create', compact('alumnosGrado1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AlumnosGrado1::$rules);

        $alumnosGrado1 = AlumnosGrado1::create($request->all());

        return redirect()->route('alumnos-grado1s.index')
            ->with('success', 'AlumnosGrado1 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnosGrado1 = AlumnosGrado1::find($id);

        return view('alumnos-grado1.show', compact('alumnosGrado1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnosGrado1 = AlumnosGrado1::find($id);

        return view('alumnos-grado1.edit', compact('alumnosGrado1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AlumnosGrado1 $alumnosGrado1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlumnosGrado1 $alumnosGrado1)
    {
        request()->validate(AlumnosGrado1::$rules);

        $alumnosGrado1->update($request->all());

        return redirect()->route('alumnos-grado1s.index')
            ->with('success', 'AlumnosGrado1 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumnosGrado1 = AlumnosGrado1::find($id)->delete();

        return redirect()->route('alumnos-grado1s.index')
            ->with('success', 'AlumnosGrado1 deleted successfully');
    }
}
