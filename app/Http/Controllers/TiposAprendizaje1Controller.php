<?php

namespace App\Http\Controllers;

use App\Models\TiposAprendizaje1;
use Illuminate\Http\Request;

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
        $tiposAprendizaje1 = new TiposAprendizaje1();
        return view('tipos-aprendizaje1.create', compact('tiposAprendizaje1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposAprendizaje1::$rules);

        $tiposAprendizaje1 = TiposAprendizaje1::create($request->all());

        return redirect()->route('tipos-aprendizaje1s.index')
            ->with('success', 'TiposAprendizaje1 created successfully.');
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
            ->with('success', 'TiposAprendizaje1 deleted successfully');
    }
}
