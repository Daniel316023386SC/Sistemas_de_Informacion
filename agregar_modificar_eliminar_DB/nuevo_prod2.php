<?php
	

	NuevoProducto($_POST['id_producto'], $_POST['producto'], $_POST['descripcion']);

	function NuevoProducto($id_prod, $nom, $descrip)
	{
		include 'conexion.php';
		$sentencia="INSERT INTO productos (id_producto, nombre, descripcion) VALUES ('".$id_prod."', '".$nom."', '".$descrip."')";
		$conexion->query($sentencia) or die ("Error al ingresar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='index.php';
</script>