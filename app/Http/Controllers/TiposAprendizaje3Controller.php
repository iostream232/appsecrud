<?php

namespace App\Http\Controllers;

use App\Models\TiposAprendizaje3;
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
        $tiposAprendizaje3 = new TiposAprendizaje3();
        return view('tipos-aprendizaje3.create', compact('tiposAprendizaje  3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposAprendizaje3::$rules);

        $tiposAprendizaje3 = TiposAprendizaje3::create($request->all());

        return redirect()->route('tipos-aprendizaje3s.index')
            ->with('success', 'TiposAprendizaje3 created successfully.');
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
        request()->validate(TiposAprendizaje3::$rules);

        $tiposAprendizaje3->update($request->all());

        return redirect()->route('tipos-aprendizaje3s.index')
            ->with('success', 'TiposAprendizaje3 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposAprendizaje3 = TiposAprendizaje3::find($id)->delete();

        return redirect()->route('tipos-aprendizaje3s.index')
            ->with('success', 'TiposAprendizaje3 deleted successfully');
    }
}
