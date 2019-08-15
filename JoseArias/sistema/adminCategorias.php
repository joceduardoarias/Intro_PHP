<?php
		include 'includes/header.html';  //busco la libreria o mi archivo html y ejecutalo
		include 'includes/nav.php';
		require 'funciones/conexion_bd.php';
		require 'funciones/funcionesCategoria.php';
?>

    <main class="container">
        <h1>Panel de administración de categorias</h1>
        <table class="table table-hover table-border table-stripped">
				<thead class="thead-dark">
					<tr>
						<th>id</th>
						<th>Marca</th>
						<th colspan="2">
							<a href="formAgregarMarca" class="btn btn-secondary"> <!-- este es un boton generado atraves de boostrap utilizando anchor que trae la librerias del boostrap-->
							Agregar
							</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php // abrir while
					$liCategorias = ListarCategorias();
					while ($categoria= mysqli_fetch_array($liCategorias))
					{


					  ?>
					<tr>
					<td><?php echo $categoria[0]; ?></td>
					<td><?php echo $categoria[1]; ?></td>
						<td>
							<a href="formModificarMarca" class="btn btn-secondary"> <!-- este es un boton generado atraves de boostrap utilizando anchor que trae la librerias del boostrap-->
							Modificar
							</a>
						</td>
						<td>
							<a href="formEliminarMarca" class="btn btn-secondary"> <!-- este es un boton generado atraves de boostrap utilizando anchor que trae la librerias del boostrap-->
							Eliminar
							</a>
						</td>
					</tr>
						<?php //cerrar while
					} //tarea hacer listado de categorias, listados de productos y usuarios
						?>
				</tbody>
			</table>
		
    </main>

<?php  include 'includes/footer.php';  ?>
