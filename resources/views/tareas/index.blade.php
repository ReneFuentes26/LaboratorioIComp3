@extends('layouts.app')
<div class="container">
    <h1>Listado de Tareas</h1>
    <table class="table  table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
            <tr>
                <td>{{ $tarea->id }}</td>
                <td>{{ $tarea->task_name }}</td>
                <td>{{ $tarea->task_time }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/tarea/'.$tarea->id) }}" class="btn btn-info" >Mostrar</a>
                    <form method="POST" action="{{ url('/tarea/'. $tarea->id) }}" style="display: inline;">
                     @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta tarea?')">Eliminar Tarea</button>
                    </form>
                    </div>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
<div class="text-center">
<button type="button" class="btn btn-link"><a href="{{ url('/') }}" >Ir a la página de inicio</a></button>
</div>
</table>

