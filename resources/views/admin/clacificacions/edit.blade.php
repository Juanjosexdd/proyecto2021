@extends('adminlte::page')

@section('title', 'ENASA | EDITAR CLACIFICACIÓN')


@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <h3 class="text-blue">Editar clacificacion {{ $clacificacion->nombre }}</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem" bis_skin_checked="1">
            <div class="card-body" style="overflow-y: auto">
                {!! Form::model($clacificacion, ['route' => ['admin.clacificacions.update', $clacificacion], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
                @include('admin.clacificacions.partials.form')
                {!! Form::submit('Guardar clacificación', ['class' => 'btn btn-outline-primary btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('footer')
    <h5 class="text-center"><a href="https://github.com/Juanjosexdd/proyecto2021" target="_blank">
            ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop

@section('js')
    <script src="{{ asset('vendor/sweetalert2.js') }}  "></script>
    <script src=" {{ asset('vendor/sweetalert-eliminar.js') }} "></script>
    <script src=" {{ asset('vendor/sweetalert-estatus.js') }} "></script>
    <script src=" {{ asset('vendor/sweetalert-estatus2.js') }} "></script>
@stop
