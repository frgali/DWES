<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ejemplo SQL Injection</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label>Usuario:</label><input type="text" name="uid" required/>
		<label>Password:</label><input type="password" name="passwd" required/>
		<input type="submit" value="Submit" />
	</form>
	<?php
        if(isset($_POST['uid']) && isset($_POST['passwd'])){
			$host = "localhost";
			$db_user= "root";
			$db_pass = "root";
			$db_name = "sql_injection";
			$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
			if ($mysqli->connect_errno) {
				echo "Conexion fallida: $mysqli->connect_error";
				exit();
			}
			$uid = $_POST['uid'];
			$pass = $_POST['passwd'];
			$sentencia = "select * from usuarios where userid = '$uid' and password = '$pass' ";
			$sentencia = "drop table prueba";
			# echo $sentencia;  //Mostramos la sentencia ejecutada
			$resultado = $mysqli->query($sentencia);
			if ($resultado) {
				echo "<h4> ---- Información del usuario ---- </h4>";
				while ($row = $resultado->fetch_row()) {
					echo "<p>" . "User ID: " . $row[0] . "</p>";
					echo "<p>" . "Password: " . $row[1] . "</p>";
					echo "<p>" . "Nombre: " . $row[2] . " Apellido : " . $row[3] . "</p>";
					echo "<p>" . "e-mail: " . $row[4] . "</p> ";
					echo "--------------------------------------------";
				}
			} else
				echo "Usuario o contraseña invalido";
		}
    ?>
</body>
</html>