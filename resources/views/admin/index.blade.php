@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">¡Hola! {{ Auth::user()->name }} Bienvenido</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nostrum qui, ratione enim laudantium totam! Magnam nisi autem fuga, nam corporis quae neque cum voluptates asperiores veritatis vero atque praesentium?</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        let timerInterval
        Swal.fire({
            position: 'top-end',
            title: 'Logeado correctamente',
            // html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    </script>
@stop