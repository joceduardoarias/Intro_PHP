<?php
    $descripciones = ["Malla Apple Watch","Tour en bote", "Cedric, stand up show", "paseo en kayak", "cambio de aceite Midas", "Parking en el aeropuerto", "Spa con pileta", "Tobogan acuático"];
    $precios = [9.99, 30, 29.75, 79, 22, 10.50, 21, 29.99];
    $imagenes = ["apple-Watch", "bote", "cedric", "kayaks", "midas", "parking", "pileta", "tobogan"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-family: helvetica;
            color: #666;
        }
        #container{
            width: 960px;
            margin: auto;
        }

        .oferta{
            width:349px;
            border: 1px solid #ccc;
            margin: 10px;
            float: left;
        }
            .oferta .precio{
                color: #0a2;
                font-size: 24px;
            }

        .clear{
            clear: both;
            height: 20px;
            border: none;
        }
    </style>
</head>
<body>

        <section id="container">
            <h1>Ofertas</h1>
            <?php
            $cantidad = count($descripciones);
            for ($i=0; $i <$cantidad ; $i++) 
            { //llave apertura de for
                 # code...
            
             ?>
            <article class="oferta">
                <img src="imagenesGroupon/<?php echo $imagenes[$i] ?>.jpg"> <!-- iteracion de imagenes lo unico dinamico es el nombre de la imagen todo lo demas es estatico -->
                <h2><?php echo $descripciones[$i]; ?></h2> <!-- iteracion de descripciones la descripcion siempre cambia asi que es dinamica-->
                <span class="precio">$ <?php echo $precios[$i] ?></span> <!-- iteracion de precios el simbolo precio es estatico pero el precio  es dinamico-->
            </article>
            <?php } //llave de cierred de for  ?>
            <hr class="clear">
        </section>

</body>
</html>
