<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 - How to Get Data Between Two Dates</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                           <div class="col-md-12">
                                <h5>Consulta para estadisticas - <span class="text-primary">Presiona el boton para realizar un filtrado</span> <a href="{{ route('home')}}" class="btn btn-sm btn-secondary float-right"><i class="fa fa-search-plus"></i></a></h5>
                           </div> 
                           <div class="col-md-12">
                            <h5><span class="text-primary">Regresar al listado de alumnos</span> <a href="{{ route('internos.index')}}" class="btn btn-sm btn-secondary float-right"><i class="fa fa-users"></i></a></h5>
                       </div> 

                           
                           
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Equipo</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($users) && $users->count())
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $user->interno->nombres }}</td>
                                            <td>{{ $user->equipo->nombre_equipo }}</td>
                                            <td><span class="badge badge-success">{{ $user->created_at }}</span></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">There Are No Data Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>