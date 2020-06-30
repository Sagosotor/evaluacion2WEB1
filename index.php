<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C R U D</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    
    <header>
        <h1 class="text-center mt-5">REGISTROS DE USUARIOS</h1>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                <form action="agregarDatos.php" method="POST">
                <h2 class="text-info">Crear Nuevo Registro </h2>
                
                <div class="form-group">
                <label for="numeroCedula">Documento Usuario</label>
                <input type="text" class="form-control" id="numeroCedula" name="numeroCedula">
                </div>

                <div class="form-group">
                <label for="nombreUsuario">Nombre Usuario</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
                </div>

                <div class="form-group">
                <label for="apellidosUsuario">Apellidos Usuario</label>
                <input type="text" class="form-control" id="apellidosUsuario" name="apellidosUsuario">
                </div>

              

                <div class="form-group">
                <label for="emailUsuario">Correo Electrónico</label>
                <input type="email" class="form-control" id="emailUsuario" name="emailUsuario">
                </div>

                <div class="form-group">
                <label for="passUsuario">Contraseña</label>
                <input type="password" class="form-control" id="passUsuario" name="passUsuario">
                </div>


                <button type="submit" class="btn btn-primary btn-block" id="btnEnviar" name="btnEnviar">Agregar Registro</button>
                </form>

                
                </div>
            
            </div>
        
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                <form action="BuscarDatos.php" method="POST">
                <h2 class="text-warning">Consulta de Registro</h2>

                <div class="form-group">
                <label for="BuscarDocumento">Buscar Documento</label>
                <input type="text" class="form-control" id="BuscarDocumento" name="BuscarDocumento">
                </div>

                <button type="submit" class="btn btn-success btn-block" id="btnBuscar" name="btnBuscar">Consultar Registro</button>
                </form>
                
                </div>
            
            </div>
        
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                <form action="BuscarDatos.php" method="POST">
                <h2 class="text-warning">Eliminar Registro</h2>

                <div class="form-group">
                <label for="Eliminarusuario">Eliminar usuario</label>
                <input type="text" class="form-control" id="Eliminarusuario" name="Eliminarusuario">
                </div>

                <button type="submit" class="btn btn-danger btn-block" id="btnEliminar" name="btnEliminar">Eliminar Registro</button>
                </form>
                
                </div>
            
            </div>
        
        </div>

    </main>
    <footer>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>