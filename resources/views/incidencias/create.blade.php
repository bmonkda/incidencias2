{{-- @extends('layouts.plantilla')

@section('title', 'Cursos create')
    
@section('content')
    <h1>En esta página podrás crear un curso</h1>

    <form action="{{(route('cursos.store'))}}" method="POST">

        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection --}}



@extends('layouts.app')

@section('title', 'Incidencias create')

@section('content')
    
    <div class="container py-5">

        <a class="btn btn-success btn-sm float-right" href="#">Nueva incidencia</a>
        <h1 class="uppercase text-center text-3xl font-bold">Creación de Incidencias</h1>
        <div class="card">
            <div class="card-body">
            
                <form action="" method="POST">

                    @csrf
            
                    <label for="">
                        Categoría:
                        <br>
                        <input type="text" name="name" value="{{old('name')}}">
                    </label>
            
                    {{-- @error('name')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror --}}
            
                    <br>
                    <label>
                        Subcategoría:
                        <br>
                        <input type="text" name="categoria" value="{{old('categoria')}}">
                    </label>
                    
            
                    {{-- @error('descripcion')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror --}}
            
                    <br>
                    <label>
                        Urgencia:
                        <br>
                        <input type="text" name="categoria" value="{{old('categoria')}}">
                    </label>
            
                    {{-- @error('categoria')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror --}}

                    <br>
                    <label>
                        ¿Desea informe de seguimiento?
                        <br>
                        <input type="text" name="categoria" value="{{old('categoria')}}">
                    </label>

                    <br>
                    <label>
                        Título:
                        <br>
                        <input type="text" name="categoria" value="{{old('categoria')}}">
                    </label>

                    <br>
                    <label>
                        Descripción:
                        <br>
                        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
                    </label>
                    
                    <br>
                    <label>Examinar para imagenes</label>
            
                    <br>
                    <button class="btn btn-primary btn-sm" type="submit">Enviar Formulario</button>
                </form>
            
            </div>
            
        </div>
    </div>
@endsection