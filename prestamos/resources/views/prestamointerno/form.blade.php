<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('carnet') }}
            {{ Form::select('id_alumno_interno', $car, $prestamointerno->id_alumno_interno, ['class' => 'form-control' . ($errors->has('id_alumno_interno') ? ' is-invalid' : ''), 'placeholder' => 'Id Alumno Interno']) }}
            {!! $errors->first('id_alumno_interno', '<div class="invalid-feedback">:message</p>') !!}
        </div> 
       
        <div class="form-group">
            {{ Form::label('id_equipo') }}
            {{ Form::text('id_equipo', $prestamointerno->id_equipo, ['class' => 'form-control' . ($errors->has('id_equipo') ? ' is-invalid' : ''), 'placeholder' => 'Id Equipo']) }}
            {!! $errors->first('id_equipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $prestamointerno->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>