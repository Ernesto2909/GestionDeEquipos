@extends('layouts.app')

@section('template_title')
    {{ $externo->name ?? 'Show Externo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Externo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('externos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $externo->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $externo->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Institucion:</strong>
                            {{ $externo->institucion }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $externo->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Educativo:</strong>
                            {{ $externo->nivel_educativo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
