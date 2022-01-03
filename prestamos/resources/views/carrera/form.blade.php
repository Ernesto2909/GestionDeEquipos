<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_decanato') }}
            {{ Form::select('id_decanato', $decanato, $carrera->id_decanato, ['class' => 'form-control' . ($errors->has('id_decanato') ? ' is-invalid' : ''), 'placeholder' => 'Id Decanato']) }}
            {!! $errors->first('id_decanato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_carrera') }}
            {{ Form::text('nombre_carrera', $carrera->nombre_carrera, ['class' => 'form-control' . ($errors->has('nombre_carrera') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Carrera']) }}
            {!! $errors->first('nombre_carrera', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>