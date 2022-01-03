

 
                  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>
   <h1>Ticket de usuario</h1> 
   
   
 

                    <table class="table table-striped table-hover">
                               <!-- <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Carnet</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Id Decanato</th>
										<th>Carrera</th>
										<th>Sexo</th>

                                      
                                    </tr>
                              </thead> -->
                                <tbody>
                                <!--    @foreach ($internos as $interno)-->
                       
                                  <!--  @endforeach -->
                                </tbody>
                    </table> 
              
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
                
</body>
</html>