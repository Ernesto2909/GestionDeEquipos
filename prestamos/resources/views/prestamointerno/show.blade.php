@extends('layouts.app')

@section('template_title')
    {{ $prestamointerno->name ?? 'Show Prestamointerno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prestamointerno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamointernos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Alumno Interno:</strong>
                            {{ $prestamointerno->id_alumno_interno }}
                        </div>
                        <div class="form-group">
                            <strong>Id Equipo:</strong>
                            {{ $prestamointerno->id_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $prestamointerno->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
