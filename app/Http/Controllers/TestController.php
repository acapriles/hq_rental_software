<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Requests\TestStoreRequest;
use App\Http\Requests\TestUpdateRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::orderBy('id', 'DESC')->paginate(5);
        return view('tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestStoreRequest $request)
    {
        try {
            $test = Test::create($request->all());
            
            return redirect()->route('tests.index', $test->id)
            ->with('info', 'Registro creado con exito');
        
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Error al crear el registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::findOrFail($id);

        return view('tests.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);

        return view('tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(TestUpdateRequest $request, Test $test)
    {
        try {
            $test->update($request->all());

            return redirect()->route('tests.edit', $test->id)
            ->with('info', 'Registro modificado satisfactoriamente!');

        } catch (\Throwable $th) {
            //throw $th;
            //return redirect()->route('tests.edit', $test->id)->with($notification);
            return back()->with('error', 'Error al editar el registro');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Test::find($id)-> delete();
            return back()->with('info', 'Eliminado correctamente');

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'No se pudo eliminar el Registro');
        }
    }
}
