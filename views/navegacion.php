<?php session_start();

// if (!$_SESSION["validar"]) {
// header("location:index.php?action=ingresar");

// exit();
//}


 ?>

<aside class="main-sidebar">

	 <section class="sidebar">

	 	<!-- aqui va el if administrador  -->

	 	<?php


      if( $_SESSION["perfil"]== "Administrador"){
      

      echo '<ul class="sidebar-menu">

			<li class="treeview">

				<a href="#">

					<i class="fa fa-users"></i>
					
					<span>Categorias</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarCategoria">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Categoria</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=cambio">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Categoria</span>

						</a>

					</li>

					

				</ul>

			</li>
			

			<li class="treeview">

				<a href="#">

					<i class="fa fa-users"></i>
					
					<span>Usuarios</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarUsuario">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Usuarios</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=ya1">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Usuarios</span>

						</a>

					</li>

					

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Clientes</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarlect">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Lectores</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=je">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Lectores</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Autor</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarAutores">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar autor</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=aldas">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Autor</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Libros</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarPreguntas">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Libros</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=pe">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Libros</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Alquiler</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarHabilitar">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Alquiler</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=ya">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Alquiler</span>

						</a>

					</li>

				</ul>

			</li>


				

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Editoriales</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresareditor">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Editoriales</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=you">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta editorial</span>

						</a>

					</li>

				</ul>

			</li>


			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Salir</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=salir">
							
							<i class="fa fa-circle-o"></i>
							<span>Cerra Sesion</span>

						</a>

					</li>


				</ul>

			</li>

		</ul> ';

	}else if( $_SESSION["perfil"]== "Estudiante"){

      echo '<ul class="sidebar-menu">
      		<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Examen</span>
					

				</a>

				<ul class="treeview-menu">

				<li>

						<a href="index.php?action=">
							
							<i class="fa fa-circle-o"></i>
							<span>Hacer Examen</span>

						</a>

					</li>
					
					
					<li>

						<a href="index.php?action=exa">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Examen</span>

						</a>

					</li>

				</ul>

			</li>
			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Resultados</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=">
							
							<i class="fa fa-circle-o"></i>
							<span>Cerra Sesion</span>

						</a>

					</li>


				</ul>

			</li>
			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Salir</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=salir">
							
							<i class="fa fa-circle-o"></i>
							<span>Cerra Sesion</span>

						</a>

					</li>


				</ul>

			</li>

			

			</ul>';

}



?>



		<!-- <ul class="sidebar-menu">

			<li class="treeview">

				<a href="#">

					<i class="fa fa-users"></i>
					
					<span>Categorias</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarCategoria">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Categoria</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=cambio">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Categoria</span>

						</a>

					</li>

					

				</ul>

			</li>
			

			<li class="treeview">

				<a href="#">

					<i class="fa fa-users"></i>
					
					<span>Usuarios</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarUsuario">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Usuarios</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=ya1">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Usuarios</span>

						</a>

					</li>

					

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Estudiantes</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarEstudiantes">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Estudiante</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=je">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Estudiantes</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Carrera</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarCarrera">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Carrera</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=aldas">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Carrera</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Pregunta</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarPreguntas">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Pregunta</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=pe">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Preguntas</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Habilitar</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarHabilitar">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Habilitar</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=ya">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Habilitar</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Examen</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarExamen">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Examen</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=exa">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Examen</span>

						</a>

					</li>

				</ul>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Configuracion</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=ingresarConfiguraciones">
							
							<i class="fa fa-circle-o"></i>
							<span>Ingresar Configuracion</span>

						</a>

					</li>

					<li>

						<a href="index.php?action=you">
							
							<i class="fa fa-circle-o"></i>
							<span>Consulta Configuracion</span>

						</a>

					</li>

				</ul>

			</li>


			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Salir</span>
					

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="index.php?action=salir">
							
							<i class="fa fa-circle-o"></i>
							<span>Cerra Sesion</span>

						</a>

					</li>


				</ul>

			</li>

		</ul> -->





	 </section>

</aside>

		<?php


      
?>


