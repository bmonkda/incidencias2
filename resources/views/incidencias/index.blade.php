@extends('layouts.app')

@section('content')
    
    <div class="container py-5">

        <a class="btn btn-success btn-sm float-right" href="{{ route('incidencias.create') }}">Nueva incidencia</a>
        <h1 class="uppercase text-center text-3xl font-bold">Lista de Incidencias</h1>
        <div class="card">
            <div class="card-body">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>Incidencia</th> --}}
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
                                {{-- <td>{{ $incidencia->description }}</td> --}}
                                <td>{{ $incidencia->user->name }}</td>
                                <td>{{ $incidencia->subcategory->category->name }}</td>
                                <td>{{ $incidencia->emergency->name }}</td>
                                <td>{{ $incidencia->estatu->name }}</td>
    
                                <td width="10px">
                                    {{-- <a href="{{ route('incidencias.edit', $incidencia) }}" class="btn btn-primary bt-sm">Editar</a> --}}
                                    <a href="#" class="btn btn-primary bt-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    {{-- <a href="{{ route('incidencias.edit', $incidencia) }}" class="btn btn-primary bt-sm">Editar</a> --}}
                                    <a href="#" class="btn btn-primary bt-sm">Ver</a>
                                </td>
                                {{-- <td width="10px"> --}}
                                    {{-- <form action="{{ route('', $incidencia) }}" method="POST"> --}}
                                    {{-- <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger bt-sm">Eliminar</button>
                                    </form>
                                </td> --}}
                            {{-- </tr> --}}
                        @endforeach
                    </tbody>
                </table>
                {{$incidencias->links()}}
            
            </div>
            
        </div>
    </div>
@endsection
