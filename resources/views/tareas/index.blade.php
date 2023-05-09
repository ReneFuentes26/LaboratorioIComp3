Listado de Tareas 

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tareas as $tarea)
        <tr>
            <td>{{ $tarea->id }}</td>
            <td>{{ $tarea->task_name }}</td>
            <td>{{ $tarea->task_time}}</td>
            <td>{{ $tarea->descripcion}}</td>
       
        <td>
            <form method="POST" action="{{ url('/tarea/'. $tarea->id) }}">
            <a href="{{ url('/tarea/'. $tarea->id) }}"> Mostrar Tareas </a>
            @csrf 
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>












</table>