@extends('layouts.app')

@section('template_title')
    Prestamointerno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prestamointerno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('prestamointernos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Alumno Interno</th>
										<th>Id Equipo</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prestamointernos as $prestamointerno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $prestamointerno->interno->nombres }}</td>
											<td>{{ $prestamointerno->equipo->nombre_equipo }}</td>
											<td>{{ $prestamointerno->fecha }}</td>

                                            <td>
                                                <form action="{{ route('prestamointernos.destroy',$prestamointerno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('prestamointernos.show',$prestamointerno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('prestamointernos.edit',$prestamointerno->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $prestamointernos->links() !!}
            </div>
        </div>
    </div>
@endsection
