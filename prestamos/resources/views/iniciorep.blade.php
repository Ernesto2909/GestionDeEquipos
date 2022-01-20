<!DOCTYPE html>
<html>
<head>
    <title>Filtrar datos por rango de fechas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                        <h5>Filtrar datos por rango de fechas - <span class="text-primary">Prestamos Unicaes</span></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('daily.report') }}" method="get">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fecha de inicio</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fecha final</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>