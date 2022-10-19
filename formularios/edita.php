
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ("../listados/listado.php");
include("../accesoaDatos/bd.php");
    $id=$_GET['id'];
    $datosproducto=get_by_ID($id);
?>
    <form enctype="multipart/form-data" name="input" action="" method="post">

        <label for="name">ID</label>
        <input disabled type="text" name="id" id="id"/>
        </br>

        <label>PRODUCTO</label>
        <input type="text" name="producto">
        <?php
        echo "<input type='text' name='producto' id='producto' value='".$datosproducto['producto']."'/></br>";
        ?>
       
       <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
        IMAGEN:
        <?php
        echo "<input name='imagen' type='file'/></br>";
        ?>
        <input type="submit" value="GUARDAR" name="guardar" >
    </form> 
    <?php
    if (isset($_POST['producto']) && isset($_FILES['imagen']))
    {
        $producto=$_POST['producto'];
        $imagen=base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
        $datosproducto['id']=$id;
        $datosproducto['producto']=$producto;
        $datosproducto['imagen']=$imagen;
    }
    ?>
    
</body>
</html>