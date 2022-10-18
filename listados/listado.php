<!-- Página del listado -->
<?php
include("../accesoaDatos/bd.php");
// if (!isset ($_GET['page']) ) {  
//     $pagina = 1;  
// } else {  //Si ha sido redireccionado
//     $pagina = $_GET['page'];  
// }
if (isset($_POST['borrar'])) {
    $clave = $_GET['id'];
    $prod = get_by_ID($clave);
    delete_by_ID($prod);
} 
$lista = [];
$lista = get_All();


?>
<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>

<body>
    <!-- Creación de un nuevo usuario -->
    <form id="nuevo" action="../formularios/nuevo.php" method="POST" enctype="multipart/form-data">
        <button type="submit" name="new" id="new">Añadir alumno</button>
    </form>

    <h3>Listado</h3>

    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Acción</th>
        </tr>

        <!-- Ahora mostramos el listado -->
        
        <?php
        if (!empty($lista)) {   // Si el array no está vacío, rellenamos la tabla según la base de datos
            $i = 0;
            foreach ($lista as $produc) {
                $img = $produc[$i]['foto'];
                $foto = "<img src=\"data:image/png;base64, $img \"";
                print('<tr><td>' . $produc[$i]['id'] . '</td><td>' . $produc[$i]['nombre'] . '</td><td>' . $foto . '</td>' .
                    "<td> <form action='../formularios/edita.php?id=$id' method='GET'><input type='submit' name='editar' value='✏️'></form>" .
                    "<form action='listado.php?id=$id' method='POST'><input type='submit' name='borrar' value='🗑️'></form></td></tr>");
                $i++;
            }
        }else { // Si está vacío, añadimos una fila a la tabla
            print('<tr><td id="vacio">' . 'No hay alumnos'  . 'registrados' .  'en la base de datos' . '</td></tr>');
        }
        print('<tfoot></tfoot>')
        ?>
    </table>
</body>

</html>