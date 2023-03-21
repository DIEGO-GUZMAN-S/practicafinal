<?php
error_reporting (0);
include 'includes/conecta.php';
include 'includes/acciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro || DGS</title>
</head>
<body>
    	<!--Es el comiemso del codigo -->
        <div class="container text-center">
			<p class="text-muted py-2"> <h4>Registro de Usuario</h4></p>
			<p class="text-muted py-2">Ingresa los campos para entrar en secion</p>
            <p class="text-muted py-2">nota: si no eres mayor de edad no te dejara rejistrarse </p>
		</div>
         <!--Justificasion -->
         <div class="row justify-content-center h-100 ">
		    <div class="col-sm-8 col-md-6 rounded">
			   <div class="row">
				  <div class="col-sm-10 col-md-12 col-lg-12">

				  	 <!--Formulario-->
                    <form class="needs-validation"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                <use xlink:href="main/icons/bootstrap-icons.svg#person-circle"/>
                                 </svg>
								
							</span>
							<input type="text" name="Nombre" class ="form-control" placeholder ="Nombre" aria-label ="text" aria-describedaby="text" required>
							<div class="valid-feedback"> Nombre Valido</div>
							<div class="invalid-feedback"> Agregar Nombre</div>

						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                <use xlink:href="main/icons/bootstrap-icons.svg#person-circle"/>
                                 </svg>
								
							</span>
							<input type="text" name="Apellido" class ="form-control " placeholder ="Apellido" aria-label ="text" aria-describedaby="text" required>
							<div class="valid-feedback"> Apellido Valido</div>
							<div class="invalid-feedback"> Agregar Apellido</div>

						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#journal-text"/>
                                 </svg>
								
							</span>
							<input type="text" name="direccion" class ="form-control" placeholder ="direccion" aria-label ="text" aria-describedaby="text" required>
							<div class="valid-feedback"> direccion Valido</div>
							<div class="invalid-feedback"> Ingresa una direccion</div>
							
						</div> 
                        <div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#journal-bookmark-fill"/>
                                 </svg>
								
							</span>
							<input type="tel" name="Telefono" class ="form-control" placeholder ="Telefono" aria-label ="tel" aria-describedaby="tel" required>
							<div class="valid-feedback"> Telefono Valido</div>
							<div class="invalid-feedback"> Ingresa Telefono</div>
							
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#journal-bookmark-fill"/>
                                 </svg>
								
							</span>
							<input type="text" name="fecha_N" class ="form-control" placeholder ="Fecha de nacimineto" aria-label ="text" aria-describedaby="text" required>
							<div class="valid-feedback"> Fecha Valido</div>
							<div class="invalid-feedback"> Ingresa tu fecha </div>

                        </div>
                        <div class="input-group mb-3">
							<span class="input-group-text" id="registro">
								<svg class="bi" width="32" height="32" fill="currentColor">
                                <use xlink:href="main/icons/bootstrap-icons.svg#envelope-fill"/>
                                 </svg>
								
							</span>
							<input type="gmail" name="email" class ="form-control" placeholder ="Gmail" aria-label ="gmail" aria-describedaby="gmail" required>
							<div class="valid-feedback"> Gmail Valido</div>
							<div class="invalid-feedback"> Ingresa tu Gmail</div>

						</div>


                        <div name= "rejistro" class="d-grid gap-2">
                        	<button class="btn btn-outline-danger btn-sm " name= "btn" type="submit" > Registrar </button>
                        </div>
					</form>
                  </div>
                </div>
             </div>
             <?php echo $mensaje; ?>
        </div>
</body>
</html>