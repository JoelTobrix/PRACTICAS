<?php
$server="localhost";
$user="root";
$password="";
$database="cover";
  
   //Declaracion conexion a la database
   $conexion = new mysqli($server,$user,$password,$database);
   if($conexion->connect_errno){
      die(" error ". $conexion->connect_errno);
   }else{
      echo "Conexion Exitosa";
   } //Cerrar
   $conexion-> close();
?>