@extends('layouts.app')

@section('template_title')
    {{ $interno->name ?? 'Show Interno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Interno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('internos.index') }}"> Back</a>

                        


                            <a href="{{ route('internos.pdf' , $interno->id) }}" class="btn btn-primary btn-sm "  data-placement="left">
                                  {{ __('pfd New') }}
                                </a>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carnet:</strong>
                            {{ $interno->carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $interno->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $interno->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Decanato:</strong>
                            {{ $interno->id_decanato }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $interno->carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $interno->sexo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
