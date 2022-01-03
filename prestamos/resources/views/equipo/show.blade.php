@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Equipo:</strong>
                            {{ $equipo->nombre_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Equipo:</strong>
                            {{ $equipo->descripcion_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $equipo->id_estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
