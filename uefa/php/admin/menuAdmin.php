<?php
	/*
	session_start();
	if(!$_SESSION['verificar']){
		header("Location: ../../html/public/index.html");
	}
	echo $_SESSION['usuario'];
	*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>Champions League Admin</title>
</head>
<body>
    <header class="fixed-top">
		<div class="bg-dark collapse navbar-collapse" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-8 py-4">
						<h4 class="text-white">Sobre UEFA</h4>
						<p class="text-muted">La UEFA, la Unión de Federaciones Europeas de Fútbol, es el órgano rector del fútbol europeo y una organización global de 55 federaciones nacionales.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark">
			<div class="container">
				<!-- logout -->
				<a href="../logout.php" class="navbar-brand d-flex align-items-center">
					<img src="../../img/uefaIcon.png" alt="" class="img-fluid card-img-top" >
					<strong class="p-2">LOGOUT</strong>
				</a>   
				<!-- Gestion Equipos -->
				<div class="nav-item dropdown">
					<a 
						href="#"
						class="nav-link dropdown-toggle"
						data-bs-toggle="dropdown"
						role="button"
						aria-expanded="false"
						style="color:#ffffff;"
					>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
							<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
						</svg>
						<strong class="p-2">Gestion Equipos</strong>
					</a>
					<ul class="dropdown-menu">
						<li><a href="crearEquipo.php" class="dropdown-item">Ingresar Equipos</a></li>
						<li><a href="../equipos/mostrarEquipos.php"  class="dropdown-item">Mostrar Equipos</a></li>
						<li><a href="#" class="dropdown-item">Buscar Equipos &raquo;</a>
							<ul class="dropdown-menu dropdown-submenu">
								<li><a href="buscadorEquipoNombre.php" class="dropdown-item">Buscar Nombre Equipo</a></li>
								<li><a href="buscadorEquipoPais.php" class="dropdown-item">Buscar Pais Equipo</a></li>
							</ul>
						</li>
						<li><a href="#" class="dropdown-item">Editar Equipos &raquo;</a>
							<ul class="dropdown-menu dropdown-submenu">
								<li><a href="#" class="dropdown-item">Buscar Nombre Equipo</a></li>
								<li><a href="#" class="dropdown-item">Buscar Pais Equipo</a></li>
								<li><a href="#" class="dropdown-item">Seleccionar en Tabla Equipo</a></li>
							</ul>
						</li>
						<li><a href="#" class="dropdown-item">Eliminar Equipos</a></li>
					</ul>
				</div>
				<!-- Gestion Sorteos -->
				<div class="nav-item dropdown">
					<a 
						href="#"
						class="nav-link dropdown-toggle"
						data-bs-toggle="dropdown"
						role="button"
						aria-expanded="false"
						style="color:#ffffff;"
					>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"/>
							<path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"/>
						</svg>
						<strong class="p-2">Gestion Sorteos</strong>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#" class="dropdown-item">Bombos 1-4 &raquo;</a>
							<ul class="dropdown-menu dropdown-submenu">
								<li><a href="#" class="dropdown-item">Crear Bombos</a></li>
								<li><a href="#" class="dropdown-item">Editar Bombos</a></li>
								<li><a href="#" class="dropdown-item">Mostrar Bombos</a></li>
							</ul>
						</li>
						<li><a href="#" class="dropdown-item">Emparejamientos &raquo;</a>
							<ul class="dropdown-menu dropdown-submenu">
								<li><a href="#" class="dropdown-item">Crear Emparejamiento</a></li>
								<li><a href="#" class="dropdown-item">Editar Emparejamiento</a></li>
								<li><a href="#" class="dropdown-item">Mostrar Emparejamientos</a></li>
							</ul>
						</li>
						<li><a href="#" class="dropdown-item">Fase de Grupos</a></li>
						<li><a href="#" class="dropdown-item">Octavos de Final</a></li>
						<li><a href="#" class="dropdown-item">Cuartos de Final</a></li>
						<li><a href="#" class="dropdown-item">Semi-Final</a></li>
						<li><a href="#" class="dropdown-item">Final</a></li>
					</ul>
				</div> 
				<!-- Gestion Resulatados -->          
				<div class="nav-item dropdown">
					<a 
						href="#"
						class="nav-link dropdown-toggle"
						data-bs-toggle="dropdown"
						role="button"
						aria-expanded="false"
						style="color:#ffffff;"
					>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
							<path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
						</svg>
						<strong class="p-2">Gestion Resultados</strong>
					</a>
					<ul class="dropdown-menu">
						<li><a href="../ingresarResultados.php" class="dropdown-item">Ingresar Resultados</a></li>
						<li><a href="#" class="dropdown-item">Mostrar Resultados</a></li>
						<li><a href="#" class="dropdown-item">Editar Resultados</a></li>
						<li><a href="#" class="dropdown-item">Buscar Resultados</a></li>
					</ul>
				</div>     
				<button 
					class="navbar-toggler collapsed"
					type="button" 
					data-bs-toggle="collapse"
					data-bs-target="#navbarHeader"
					aria-controls="navbarHeader"
					aria-expanded="false"
					aria-label="Alternar Navegacion"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</header>
    <main>
        <!-- Carrusel -->
        <div class="container my-5">
            <div class="row slider">
                <div class="col">
                    <div class="carousel slide" data-bs-ride="carousel" id="slider">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../../img/champions2.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../../img/champions3.webp" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../../img/champions4.webp" alt="">
                            </div>
                        </div>
        
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
        
                        <div class="carousel-indicators">
                            <button 
                                type="button" 
                                data-bs-target="#slider" 
                                data-bs-slide-to="0" 
                                class="active" 
                                aria-current="true" 
                                aria-label="Slideshow 1"
                            ></button>
                            <button 
                                type="button" 
                                data-bs-target="#slider" 
                                data-bs-slide-to="1"
                                aria-label="Slideshow 2"
                            ></button>
                            <button 
                                type="button" 
                                data-bs-target="#slider" 
                                data-bs-slide-to="2"
                                aria-label="Slideshow 3"
                            ></button>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
		<!-- acerca uefa -->
		<div class="container">
			<div class="row acerca g-0 px-4 mb-5">
				<div class="col">
					<h2 class="titulo text-center py-5">Champions League</h2>
					<div class="row historia">
						<p class="text-muted">La Liga de Campeones de la UEFA, conocida en sus orígenes como Copa de Europa, es el torneo internacional oficial de fútbol más prestigioso a nivel de clubes entre los organizados por la Unión de Asociaciones Europeas de Fútbol.​​</p>
					</div>
				</div>
			</div>
		</div>
    </main>
    
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>
