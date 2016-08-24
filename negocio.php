<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="872" height="435" border="1" align="center">
  <tr>
    <td>Banner</td>
  </tr>
  <tr>
    <td>Menu</td>
  </tr>
  <tr>
    <td height="156"><p>Negocio:</p>
      <p>
      <?php
	  include ('conexion.php'); 
	    
	  $usuariocorrecto="0";
	  $ccorreo="No registra";
	  $ppassword="No registra";
	  
	  $correo=$_POST["correo"];
	  $password=$_POST["password"];
	  
	  //echo "Esta llegando $correo  </br>";
	  //echo "Esta llegando $password  </br>";
	  	
	  ?>
      
      
      
      
	   <?php
$sql = "SELECT * FROM users WHERE correo='$correo'";

if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{
	//echo "Consulta encontrada";
	
	$ccorreo=$row['correo'];
	$ppassword= $row['password'];
		
	
	
	
	
	if (($correo==$ccorreo)&&($password==$ppassword))
	{
		echo "Usuario Correcto";
		//enlace de acceso
		echo "<a href=pagprivada.php>Ir a mi página privada:</a>";
			
	}	
	
	
	if (($correo!=$ccorreo)||($password!=$ppassword))
	{
		echo "Usuario Incorrecto";	
	}

	
	
	
	
			
	
} // Fin del While


?>

	   
	   
	   
	  
	  
      
      
      </p>
      <p><a href="index.php">cerrar sesion:</a></p>
    <p>&nbsp;</p>    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>Footer</td>
  </tr>
</table>
</body>
</html>