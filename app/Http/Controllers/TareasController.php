<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tareas = Tareas::all();
        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tareas= new Tareas();
        return view('tareas.create', compact('tareas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tarea = new Tareas;
        $tarea->task_name = $request->task_name;
        $tarea->task_time = $request->task_time;
        $tarea->descripcion = $request->descripcion;
        $tarea->save();
    
        return redirect()->route('tareas.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tareas = Tareas::findOrFail($id);
        return view('tareas.index',compact('tareas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tareas::destroy($id);
        return redirect('tareas');
    }
}
