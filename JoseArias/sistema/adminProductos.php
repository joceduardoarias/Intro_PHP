<?php
		include 'includes/header.html';  //busco la libreria o mi archivo html y ejecutalo
		include 'includes/nav.php';
		require 'funciones/conexion_bd.php';
		require 'funciones/funcionesProductos.php';

?>

    <main class="container">
        <h1>Panel administracion de productos</h1>
        <table class="table table-hover table-border table-stripped">
				<thead class="thead-dark">
					<tr>
						<th>id</th>
						<th>Marca</th>
						<th>Precio</th>
						<th>Presentacion</th>
						<th>Imagen</th>
						<th colspan="2">
							<a href="formAgregarMarca" class="btn btn-secondary"> <!-- este es un boton generado atraves de boostrap utilizando anchor que trae la librerias del boostrap-->
							Agregar
							</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php // abrir while
					$liProductos =ListarProductos();
					while ($producto= mysqli_fetch_array($liProductos))
					{
						

					  ?>
					<tr>
					<td><?php echo $producto[0]; ?></td>
					<td><?php echo $producto[1]; ?></td>
					<td><?php echo $producto[2]; ?></td>
					<td><?php echo $producto[3]; ?></td>
					<td><img src="images/productos/<?php echo $producto[4]?>"></td>
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