<?php

namespace App\Http\Controllers;

use App\Models\TiposAprendizaje2;
use Illuminate\Http\Request;

/**
 * Class TiposAprendizaje2Controller
 * @package App\Http\Controllers
 */
class TiposAprendizaje2Controller extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposAprendizaje2 = new TiposAprendizaje2();
        return view('tipos-aprendizaje2.create', compact('tiposAprendizaje2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposAprendizaje2::$rules);

        $tiposAprendizaje2 = TiposAprendizaje2::create($request->all());

        return redirect()->route('tipos-aprendizaje2s.index')
            ->with('success', 'TiposAprendizaje2 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposAprendizaje2 = TiposAprendizaje2::find($id);

        return view('tipos-aprendizaje2.show', compact('tiposAprendizaje2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposAprendizaje2 = TiposAprendizaje2::find($id);

        return view('tipos-aprendizaje2.edit', compact('tiposAprendizaje2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposAprendizaje2 $tiposAprendizaje2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposAprendizaje2 $tiposAprendizaje2)
    {
        request()->validate(TiposAprendizaje2::$rules);

        $tiposAprendizaje2->update($request->all());

        return redirect()->route('tipos-aprendizaje2s.index')
            ->with('success', 'TiposAprendizaje2 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposAprendizaje2 = TiposAprendizaje2::find($id)->delete();

        return redirect()->route('tipos-aprendizaje2s.index')
            ->with('success', 'TiposAprendizaje2 deleted successfully');
    }
}
