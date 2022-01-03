<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_alumno_externo') }}
            {{ Form::text('id_alumno_externo', $prestamoexterno->id_alumno_externo, ['class' => 'form-control' . ($errors->has('id_alumno_externo') ? ' is-invalid' : ''), 'placeholder' => 'Id Alumno Externo']) }}
            {!! $errors->first('id_alumno_externo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_equipo') }}
            {{ Form::text('id_equipo', $prestamoexterno->id_equipo, ['class' => 'form-control' . ($errors->has('id_equipo') ? ' is-invalid' : ''), 'placeholder' => 'Id Equipo']) }}
            {!! $errors->first('id_equipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $prestamoexterno->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>