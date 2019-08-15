<?php

        require 'funciones/conexion.php';
        require 'funciones/funcionesMarcas.php';
        $listadoMarcas = listarMarcas();
		include 'includes/header.html';  
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de marcas</h1>

        <table class="table table-hover table-border table-stripped">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="formAgregarMarca.php" class="btn btn-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php

                while ( $marca = mysqli_fetch_array($marcas) ){
?>
                <tr>
                    <td><?php echo $marca[0]; ?></td>
                    <td><?php echo $marca[1]; ?></td>
                    <td>
                        <a href="formModificarMarca.php" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarMarca.php" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
                }
?>
            </tbody>
        </table>

    </main>

<?php  include 'includes/footer.php';  ?>