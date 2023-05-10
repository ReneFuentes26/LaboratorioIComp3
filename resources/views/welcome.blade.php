@extends('layouts.app')

@section('content')
<br />
<div class='text-center'>
<h3> <p>Laboratorio I</p></h3>
<h3><p> Laboratorio I del Computo 3 de Programacion Computacional IV </p></h3> <br />
<a href="{{ route('tareas.create') }}" class="btn btn-primary">Crear tarea</a>
<a href="{{ route('tareas.index') }}" class="btn btn-primary"> Lista de Tareas</a>
</div>

</div>
@endsection