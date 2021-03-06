@extends('adminlte::page')

@section('title', 'ENASA | EDITAR DEPARTAMENTO')

@section('content')
    @include('sweetalert::alert')

    <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
        <div class="card-body">
            <h3 class="text-blue">Editar departamento {{ $departamento->nombre }} </h3>
        </div>
    </div>

    <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem" bis_skin_checked="1">

        <div class="card-body" style="overflow-y: auto">
            {!! Form::model($departamento, ['route' => ['admin.departamentos.update', $departamento], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
            @include('admin.departamentos.partials.form')
            {!! Form::submit('Guardar departamento', ['class' => 'btn btn-outline-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footer" style="background: inherit; border-color: inherit;">

        </div>
    </div>
@stop

@section('footer')
    <h5 class="text-center"><a href="https://github.com/Juanjosexdd/silosenasa" target="_blank">
            ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/cards.css') }}">
@stop
