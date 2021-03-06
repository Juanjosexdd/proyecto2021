@extends('adminlte::page')

@section('title', 'ENASA | EDITAR PROVEEDOR')


@section('content_header')
    <h1 class="text-blue">EDITAR PROVEEDOR</h1>
@stop

@section('content')
    @include('sweetalert::alert')

    <div class="container">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <h3 class="text-blue">Editar proveedor {{ $proveedor->nombre }} </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem" bis_skin_checked="1">
            <div class="card-body" style="overflow-y: auto">
                {!! Form::model($proveedor, ['route' => ['admin.proveedors.update', $proveedor], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
                @include('admin.proveedors.partials.form')
                {!! Form::submit('Guardar proveedor', ['class' => 'btn btn-outline-primary btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('footer')
    <h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021" target="_blank">
            ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/cards.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        Livewire.on('alert', function($message) {
            Swal.fire(
                'Buen Trabajo!',
                $message,
                'success'
            )
        })

    </script>
@stop
