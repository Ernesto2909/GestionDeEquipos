 @extends('layouts.app')

@section('template_title')
    Interno
@endsection

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Interno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('internos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>

                                <a href="{{ route('internos.pdf') }}" class="btn btn-primary btn-sm "  data-placement="left">
                                  {{ __('pfd New') }}
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
                            <table id="user" class="table table-striped interno_datatable" style="width:100%">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Carnet</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Id Decanato</th>
										<th>Carrera</th>
										<th>Sexo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($internos as $interno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $interno->carnet }}</td>
											<td>{{ $interno->nombres }}</td>
											<td>{{ $interno->apellidos }}</td>
											<td>{{ $interno->decanato->nombre_decanato }}</td>
											<td>{{ $interno->carrera}}</td>
											<td>{{ $interno->sexo }}</td>

                                            <td>
                                                <form action="{{ route('internos.destroy',$interno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('internos.show',$interno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('internos.edit',$interno->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $internos->links() !!}
            </div>
        </div>
    </div>
   
   
@endsection


