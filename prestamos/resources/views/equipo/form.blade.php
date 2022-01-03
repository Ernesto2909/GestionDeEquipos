<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_equipo') }}
            {{ Form::text('nombre_equipo', $equipo->nombre_equipo, ['class' => 'form-control' . ($errors->has('nombre_equipo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Equipo']) }}
            {!! $errors->first('nombre_equipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('descripcion_equipo') }}
            {{ Form::text('descripcion_equipo', $equipo->descripcion_equipo, ['class' => 'form-control' . ($errors->has('descripcion_equipo') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Equipo']) }}
            {!! $errors->first('descripcion_equipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::select('id_estado', $estado , $equipo->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>