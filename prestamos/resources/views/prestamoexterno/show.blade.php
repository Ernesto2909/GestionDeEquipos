@extends('layouts.app')

@section('template_title')
    {{ $prestamoexterno->name ?? 'Show Prestamoexterno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prestamoexterno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamoexternos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Alumno Externo:</strong>
                            {{ $prestamoexterno->id_alumno_externo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Equipo:</strong>
                            {{ $prestamoexterno->id_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $prestamoexterno->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
