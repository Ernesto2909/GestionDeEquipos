@extends('layouts.app')

@section('template_title')
    Externo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Externo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('externos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Institucion</th>
										<th>Sexo</th>
										<th>Nivel Educativo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($externos as $externo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $externo->nombres }}</td>
											<td>{{ $externo->apellidos }}</td>
											<td>{{ $externo->institucion }}</td>
											<td>{{ $externo->sexo }}</td>
											<td>{{ $externo->nivel_educativo }}</td>

                                            <td>
                                                <form action="{{ route('externos.destroy',$externo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('externos.show',$externo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('externos.edit',$externo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $externos->links() !!}
            </div>
        </div>
    </div>
@endsection
