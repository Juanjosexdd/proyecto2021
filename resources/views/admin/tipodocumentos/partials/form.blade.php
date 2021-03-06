<a href=" {{route('admin.tipodocumentos.index')}} " class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4"><i class="fas fa-reply"></i>  Volver  </a>

<p class="h3 text-blue mt-1">Tipo de documento</p>
<hr>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre ',['class' => 'text-blue']) !!} {!! Form::label('slug', 'slug :',['class' => 'text-blue']) !!} <span class="text-danger">*</span>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-address-card text-blue"></i></span>
            </div>
            {!! Form::text('nombre', null, ['class' => 'form-control'  . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) !!}
            {!! Form::hidden('slug', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
            {!! $errors->first('nombre', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}

        </div>
    </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('abreviado', 'Abreviatura : ',['class' => 'text-blue']) !!}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-ad"></i></span>
                </div>
                {!! Form::text('abreviado', null, ['class' => 'form-control'  . ($errors->has('abreviado') ? ' is-invalid' : ''), 'placeholder' => 'Abreviatura']) !!}
                {!! $errors->first('abreviado', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}

            </div>
        </div>
    </div>
</div>

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>


    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>
@stop