<?php
		include 'includes/header.html';  //busco la libreria o mi archivo html y ejecutalo
		include 'includes/nav.php';
?>

    <main class="container">
        <h1>Panel de administracion</h1>
				<!-- Es una lista pero esta diseñada atraves de boostrap-->
				<div class="list-group"><!-- este es un elemento li-->
					<a href="adminMarcas.php" class="list-group-item"><!-- este es un elemento ul-->
						Panel de administracion de marcas
					</a>
					<div class="list-group"><!-- este es un elemento li-->
						<a href="adminCategoria.php" class="list-group-item"><!--este es un ul-->
							Panel de administracion de categorias
						</a>
						<div class="list-group"><!-- este es un elemento li-->
							<a href="adminProductos.php" class="list-group-item"><!--este es un ul-->
								Panel de administracion de productos
							</a>
							<div class="list-group"><!-- este es un elemento li-->
								<a href="adminUsuario.php" class="list-group-item"><!--este es un ul-->
									Panel de administracion de usuarios
								</a>
    </main>

<?php  include 'includes/footer.php';  ?>
