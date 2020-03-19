<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="Author" content="Víctor Wang" />
		<title>Document</title>
	</head>
	<body>
		<form action="form-1.php" method="post">
			<div>
				<label>Email:</label><br>
				<input type="text" name="email" placeholder="Intruduzca su email" />
			</div>
			<div>
				<label>Contraseña:</label><br>
				<input type="password" name="password" placeholder="Contraseña" />
			</div>
			<div>
				<label>Repita su Contraseña:</label><br>
				<input type="password" name="password2" placeholder="Contraseña" />
			</div>
			<div>
				<input type="hidden" name="escribir">
				<input type="submit" value="Aceptar" />
			</div>
		</form>
		<?php 
		if(isset($_POST['escribir'])) {
			$email = $_POST['email'];
      $password = $_POST['password'];
			$password2 = $_POST['password2'];
      
      if($password === $password2 && strlen($password) >= 8) {
				$msg =  "Datos procesados correctamente"; 
			} else $msg = "Error en el formulario"; 
		}
		?>
		<div>
		<strong class="mensaje"><?php echo $msg ?></strong>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
 		<script type="text/javascript">
 			$(document).ready(function() {
 			setTimeout(function() {
 				$(".mensaje").fadeOut(1500);
 				},3000);
			});
 		</script>
	</body>
</html>
