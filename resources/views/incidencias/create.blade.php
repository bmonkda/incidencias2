@extends('layouts.app')

@section('title', 'Incidencias create')

@section('content')
    
    <div class="container py-5">
        
        {{-- <a class="btn btn-success btn-sm float-right" href="#">Nueva incidencia</a> --}}
        <h1 class="uppercase text-center text-3xl font-bold">Creación de Incidencias</h1>

        <div class="card">
            {{-- <div class="form-group flex-column"> --}}

                <div class="card-body">
                
                    {{-- col-sm --}}
                  <div class="">
                  {{-- <div class="col-sm-3"> --}}
                  {{-- <div class="relative flex items-center justify-between h-16"> --}}

                    <form action="" method="POST">

                        @csrf
                
                        <label for="">
                            
                            @livewire('selector')
                            
                        </label>
                
                        {{-- @error('name')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror --}}
                
                        <br>
                        <label class="mr-20">
                            Urgencia:
                            {{-- <br> --}}
                            {{-- <input type="text" name="categoria" value="{{old('categoria')}}"> --}}
                            <select class="form-control">
                                <option value="">Seleccione una urgencia</option>
                                @foreach ($urgencias as $urgencia)
                                    <option value="{{ $urgencia->id }}">{{ $urgencia->name }}</option>
                                @endforeach
                            </select>
                        </label>
                
                        {{-- @error('categoria')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror --}}

                        {{-- <br> --}}
                        <label class="ml-2">
                            ¿Desea informe de seguimiento?
                            <br>
                            {{-- <input type="text" name="categoria" value="{{old('categoria')}}"> --}}
                            <select class="form-control">
                                <option class="disabled=false" value="">Seleccione una opción</option>
                                <option value="0">NO</option>
                                <option value="1">SI</option>
                            </select>
                        </label>

                        <br>
                        <label>
                            Título:
                            <br>
                            <input class="form-control" type="text" name="categoria" value="{{old('categoria')}}">
                        </label>

                        <br>
                        <label>
                            Descripción:
                            <br>
                            <textarea class="form-control" name="descripcion" rows="5">{{old('descripcion')}}</textarea>
                        </label>
                        
                        <br>
                        <label>Examinar para imagenes</label>
                
                        <br>
                        {{-- <button class="btn btn-primary btn-sm" type="submit">Enviar Formulario</button> --}}
                        <a class="btn btn-primary btn-sm" href="#">Enviar Formulario</a>
                    </form>

                  </div>
                
                </div>
                
            {{-- </div> --}}
        </div>
    </div>
@endsection