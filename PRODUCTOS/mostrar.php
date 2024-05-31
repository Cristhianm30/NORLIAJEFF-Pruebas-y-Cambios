<?php 
    // Incluir archivo de conexión a la base de datos
    require_once "../PHP/Conexion.php";

    // Consulta SQL para seleccionar todos los registros de la tabla productos
    $sql = "SELECT * FROM productos";

    // Ejecutar la consulta
    $result = $conexion->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Iterar sobre cada fila de resultados
        while($row = $result->fetch_assoc()) {
            // Imprimir cada fila de datos en la tabla HTML
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["codigo"] . "</td>";
            echo "<td>" . $row["producto"] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "<td>" . $row["proveedor"] . "</td>";
            echo "<td>" . $row["stock"] . "</td>";
            echo "<td>
                <a href='Modificar.php?id=" . $row["id"] . "' class='btn btn-small btn-warning'><i class='fa-solid fa-pen-to-square'></i></a>
                <a href='Eliminar.php?id=" . $row["id"] . "' class='btn btn-small btn-danger' ><i class='fa-solid fa-trash'></i></a>
            </td>";
            echo "</tr>";
        }
    } else {
        // Si no hay resultados, mostrar un mensaje
        echo "<tr><td colspan='7'>No hay registros en la tabla productos</td></tr>";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
?>
