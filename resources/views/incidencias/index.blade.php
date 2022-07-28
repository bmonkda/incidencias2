@extends('layouts.app')

@section('content')
    
    <div class="container">

        <h1>Lista de Incidencias</h1>

        <div class="card">
            <div class="card-body">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Incidencia</th>
                            <th>Usuario</th>
                            <th>Categoría</th>
                            <th>Prioridad</th>
                            <th>Estatu</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($incidencias as $incidencia)
                            <tr>
                                <td>{{ $incidencia->id }}</td>
                                <td>{{ $incidencia->description }}</td>
                                <td>{{ $incidencia->user_id }}</td>
                                <td>{{ $incidencia->subcategory_id }}</td>
                                <td>{{ $incidencia->emergency_id }}</td>
                                <td>{{ $incidencia->estatu_id }}</td>
    
                                <td width="10px">
                                    {{-- <a href="{{ route('incidencias.edit', $incidencia) }}" class="btn btn-primary bt-sm">Editar</a> --}}
                                    <a href="#" class="btn btn-primary bt-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    {{-- <form action="{{ route('', $incidencia) }}" method="POST"> --}}
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger bt-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>
            
        </div>
    </div>
@endsection
