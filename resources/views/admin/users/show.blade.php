@extends('adminlte::page')

@section('title', 'ENASA | INFORMACION PERSONAL')

@section('content')

    <div class="container ">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <h3 class="text-blue">Datos de {{ $user->name }} {{ $user->last_name }}</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem">

            <div class="card-body">
                <div class="ror">
                    <div class="col-md-12">
                        <a href=" {{ route('admin.users.edit', $user) }} "
                            class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4 ml-2"><i class="fas fa-edit"></i>
                            Editar </a>
                        <a href=" {{ route('admin.users.index') }} "
                            class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4 "><i class="fas fa-reply"></i>
                            Volver </a>

                        <p class="h3 text-blue">Información Personal</p>

                    </div>
                </div>
                <hr>
                <div class="row invoice-info">
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Cedula</strong><br>
                        <p class="text-muted">{{ $user->tipodocumento->abreviado }}-{{ $user->cedula }}</p>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Nombre</strong><br>
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img class="img-size-32 img-circle image elevation-2"" width=" 35" height="35"
                                    src="{{ $user->profile_photo_url }}" />
                            </div>
                            <div class="txt">
                                <div class="text-muted">{{ $user->name }} - {{ $user->last_name }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Correo electrónico</strong>
                        <br>
                        <span class="text-muted">{{ $user->email }}</span>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Estatus</strong><br>
                        @if ($user->estatus == 1)
                            <span class="badge badge-success">Activo</span>
                        @else
                            <span class="badge badge-danger">Inactivo</span>
                        @endif
                    </div>

                </div>
                <br>
                <div class="row invoice-info">
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Dirección</strong><br>
                        <span class="text-muted">{{ $user->address }}</span>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Contraseña</strong><br>
                        <span class="text-muted">**********</span>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Creado</strong>
                        <br>
                        <span class="text-muted">{{ $user->created_at }}</span>

                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Actualizado</strong><br>
                        <span class="text-muted">{{ $user->updated_at }}</span>
                    </div>
                </div>
                <br>
                <p class="h3 text-blue">Información Institucional</p>
                <hr>
                <div class="row">
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Departamento</strong><br>
                        <span class="text-muted">{{ $user->departamento->nombre }}</span>

                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Cargo</strong><br>
                        <span class="text-muted">{{ $user->cargo->nombre }}</span>

                    </div>
                    {{-- <div class="col-sm-3 invoice-col">
                    <strong class="font-14 text-blue">Genero</strong><br>
                    @if ($user->genero == 'M')
                        <i class="icon-copy font-30 text-light-blue fi-male"></i>
                    @else
                        <i class="icon-copy font-30 text-light-purple fi-female"></i>
                    @endif
                </div> --}}
                    
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Telefono</strong><br>
                        <span class="text-muted">{{ $user->phone }}</span>
                    </div>

                </div>
                <br>
                <div class="row invoice-info">
                    <div class="col-sm-9 invoice-col">
                        <strong class="font-14 text-blue">Permisos del user</strong><br><br>
                        @foreach ($user->getAllPermissions() as $permission)
                            <span class="badge">{{ trans('permission.' . $permission->name) }}</span>&nbsp;&nbsp;
                        @endforeach
                        <p class="badge badge-danger">Aqui Listado de permisos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
<h5 class="text-center"><a href="https://github.com/Juanjosexdd/silosenasa"  target="_blank">
    ENASA - UPTP "JJ MONTILLA"</a></h5>
@stop
