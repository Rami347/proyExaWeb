<?php
 include("../conexion/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MODIFICACIÓN</title>
	<link rel="stylesheet" href="">
</head>
<style>
	/* Estilos generales */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h3 {
    text-align: center;
    color: #333;
}

form {
    width: 60%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Estilos de los campos del formulario */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

/* Estilo responsive */
@media (max-width: 991px) {
    form {
        width: 80%;
    }
}

@media (max-width: 768px) {
    form {
        width: 95%;
    }

    h3 {
        font-size: 18px;
    }

    input[type="text"], input[type="submit"] {
        font-size: 14px;
    }
}

</style>
<body>
	
<h3>MODIFICACIÓN USUARIO</h3>

<?php 

$ci=$_POST['ci'];
//primer paso
$consulta="SELECT * FROM usuario WHERE ci = '$ci'";
//$consulta="SELECT * FROM estudiante";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el ci buscado es: ".$fila['ci'];
//echo "el nombre del buscado es: ".$fila['nombre'];

?>
<form action="../control/abm.php" method="post">
	CI:
	<input type="text" name="ci" readonly value="<?php echo $fila['ci']; ?>" >
	<br>
	NOMBRE:
	<input type="text" name="nombre" value="<?php echo $fila['nombre'];?>">

	<br>
APELLIDO:
<input type="text" name="apellido" value="<?php echo $fila['apellido'];?>">

	<br>
PASSWORD:
<input type="text" name="password" value="<?php echo $fila['password'];?>">


	<br>
EMAIL:
<input type="text" name="email" value="<?php echo $fila['email'];?>">


	<br>
NRO CELULAR:
<input type="text" name="nro_celular" value="<?php echo $fila['nro_celular'];?>">


	<br>
DIRECCION:
<input type="text" name="direccion" value="<?php echo $fila['direccion'];?>">


	<br>
SESION
<input type="text" name="id_sesion" value="<?php echo $fila['id_sesion'];?>">


<input type="submit" name="btn3" value="MODIFICAR">
</form>

<?php
}
?>

</body>
</html>