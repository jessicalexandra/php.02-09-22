<?php

require 'config/database.php';
$db = new Database();
$con = $db ->conectar();

$activo = 1;

$comando= $con->prepare("SELECT id,codigo,descripcion,stock FROM productos WHERE activo=:Mi activo ORDER BY codigo ASC");
$comando->execute(['mi_activo'=>$activo]);
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3"> 
    <main class="container contenedor">
        <div class="p-3 dounded">
            <div class="row">
                <div class="col-12">
                    <h4>productos
                        <a href="registrar.php" class="btn btn-primary float-right">registrar</a>
                    </h4>

                </div>

            </div>
            <div class="row py-3">
                <div class="col">
                    <table>
                        
                    </table>

                </div>

            </div>
        </div>

    </main>
    
</body>
</html>