<?php
include 'includes/ConectaF.php';
include 'includes/querysf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body{
			background-image: url(img/Wallpaper-Montañas.webp);
		}
		.hola{
		color: white;
		}
		
	</style>
	<title>Registro || DGS</title>
</head>

<body>
<div class="text-center">
		<img  src="img/user.png" alt="Logotipo del Desarrollador" class="text-center" width="15%" height="15%" >
	</div>
	<!--Es el comiemso del codigo -->
	<div class="container text-center">
		<p class="text-muted py-2">
		<h1 class="hola">Registro de Usuario</h1>
	</div>
	<!--Justificasion -->
	<div class="row justify-content-center h-100 ">
		<div class="col-sm-8 col-md-6 rounded">
			<div class="row">
				<div class="col-sm-10 col-md-12 col-lg-12">

					<!--Formulario-->
					<form class="needs-validation" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
									<use xlink:href="main/icons/bootstrap-icons.svg#person-circle" />
								</svg>

							</span>
							<input type="text" name="Nombres" class="form-control" placeholder="Nombre" aria-label="text"
								aria-describedaby="text" required>
							<div class="valid-feedback"> Nombre Valido</div>
							<div class="invalid-feedback"> Agregar Nombre</div>

						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
									<use xlink:href="main/icons/bootstrap-icons.svg#person-circle" />
								</svg>

							</span>
							<input type="text" name="ApellidoP" class="form-control " placeholder="Apellido Paterno"
								aria-label="text" aria-describedaby="text" required>
							<div class="valid-feedback"> Apellido Valido</div>
							<div class="invalid-feedback"> Agregar Apellido</div>

						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
									<use xlink:href="main/icons/bootstrap-icons.svg#person-circle" />
								</svg>

							</span>
							<input type="text" name="ApellidoM" class="form-control " placeholder="Apellido Materno"
								aria-label="text" aria-describedaby="text" required>
							<div class="valid-feedback"> Apellido Valido</div>
							<div class="invalid-feedback"> Agregar Apellido</div>
						</div>
						<!-- aqui esta el selector de los planteles -->
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#check2-circle"/>
                                 </svg>
								
							</span>

							<select  type="text" class ="form-control" aria-label ="text" aria-describedaby="text" required class='fomr-control' name='plantel'>
								<option value="" >Selecciona un plantel</option>
								<?php while($row = $guardar->fetch_assoc()){?>
									<option value="<?php echo $row['id_Plantel']; ?>" ><?php echo $row['NombrePlantel']; ?></option>
								<?php } ?>
							</select>
						</div>
						<!-- y aqui termina el selector de los planteles -->
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
									<use xlink:href="main/icons/bootstrap-icons.svg#envelope-fill" />
								</svg>

							</span>
							<input type="gmail" name="email" class="form-control" placeholder="Gmail" aria-label="gmail"
								aria-describedaby="gmail" required>
							<div class="valid-feedback"> Gmail Valido</div>
							<div class="invalid-feedback"> Ingresa tu Gmail</div>
						</div>
						<!-- aqui esta el selector de los estador  -->
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#check2-circle"/>
                                 </svg>
								
							</span>

							<select  type="text" class ="form-control" aria-label ="text" aria-describedaby="text" required class='fomr-control' name='estado'>
								<option value="" >Selecciona un estado</option>
								<?php while($row = $guardar1->fetch_assoc()){?>
									<option value="<?php echo $row['id_Estado']; ?>" ><?php echo $row['NombreEstado']; ?></option>
								<?php } ?>
							</select>
						</div>
						<!-- y aqui termina el selector de los estados -->
						<div name="rejistro" class="d-grid gap-2">
							<button class="btn btn-outline-danger btn-sm " name="rejistro" type="submit"> Registrar </button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php echo $mensaje; ?>
	</div>
</body>

</html>