<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_decanato') }}
            {{ Form::text('nombre_decanato', $decanato->nombre_decanato, ['class' => 'form-control' . ($errors->has('nombre_decanato') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Decanato']) }}
            {!! $errors->first('nombre_decanato', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>