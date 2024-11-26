<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../servmodel/connect.css" rel="stylesheet">
    <title>Servidores</title>
</head>
<body>
    <h2 align="center"> Acceso a Servidores internacionales </h2> 

      <table class="table body">
        <thead> 
        <tr>  
            <th>Direccion IP</th>
            <th>DNS</th>
            <th> Tipo de conexion </th>
            <th> Velocidad de carga</th>
            <th> Ancho de banda</th>
     
</thead>
</tr>   
<thbody>   
    <?php
    //Consulta DataBase para ver las caracteristicas
    $conexion = new mysqli("localhost","root","","cover");
    if ($conexion->connect_error) {
        die("Error al conectar: " . $conexion->connect_error);
    }
    $sql = "SELECT * FROM  conectividad";
    $result= $conexion->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID_direccion"] . "</td>";
            echo "<td>" . $row["dns"] . "</td>";
            echo "<td>" . $row["conexion"] . "</td>";
            echo "<td>"  . $row["velocidad"] . "</td>";
            echo "<td>" . $row["banda"] . "</td>";  
            echo "</tr>"; 
          }
 } else{
    echo "<tr><td colspan='5'>No hay listado de los servidores</td></tr>";
 }
   $conexion-> close();
    ?>  
    </thbody>
</body>
</html>