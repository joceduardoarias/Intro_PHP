<?php
    $nombreColores = [
            'azul', 'celeste', 'rojo',
            'verde', 'amarillo', 'violeta',
            'naranja', 'marrón', 'turquesa'
    ];
    $codigoColores = [
            '#03a', '#00bebe', '#f00',
            '#0a3', '#ff0', '#939',
            '#f60', '#811', 'turquoise'
    ];
    $cantidad = count ($codigoColores);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Muestra Colores</title>
    <style>
        .card-body span{
            width: 32px;
            height: 32px;
            border: solid 1px #999;
            display: inline-block;
            position: relative;
            top: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <main class="container">
        <h1>Muestra de colores</h1>

        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Muestras</div>
            <div class="card-body text-secondary">
<?php
                for ( $i = 0; $i<$cantidad; $i++) {
?>
                <span style="background-color: #ccc;"></span> <?php echo $nombreColores[$i];?>
                <br>
<?php
                }
?>
            </div>
        </div>

    </main>
</body>
</html>
