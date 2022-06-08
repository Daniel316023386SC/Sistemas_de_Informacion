<?php

  $conexion = new mysqli("localhost","root","","negocio");
  if(mysqli_connect_errno())
  {
    print("Fallo la conexion");
  }else{
    print("Estas conectado");
  }
?>