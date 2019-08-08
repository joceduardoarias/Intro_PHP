<?php
    $link = mysqli_connect(
                        'localhost',
                        'root',
                    '',
                    'catalogo'
            ); // devuelve un objeto de tipo "mysqli"

    $sql = "SELECT idMarca, mkNombre
                FROM marcas";
    $marca= mysqli_query($link,$sql);
    // devuelve
    // un objeto de tipo "mysqli_result"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <main class="container">
            <h1>listado de marcas</h1>

            <table class="table table-stripped table-hover table-border">
                <thead class="bg-success">
                    <tr>
                        <th>id</th>
                        <th>marca</th>
                    </tr>
                </thead>
                <tbody>
                  <?php //practicar para mecanizar el uso del php embebido
                  while ($fila = mysqli_fetch_array($marca))
                  { //llave apertura
                     ?>
                    <tr>
                        <td><?php echo $fila[0];//elementos dinamicos ?></td>
                        <td><?php echo $fila[1];//elementos dinamicos ?></td>
                    </tr>
                    <?php
                  }//llave de cierre
                    ?>


                </tbody>
            </table>
        </main>


</body>
</html>
