<?php
include ("../listados/listado.php");
include("../accesoaDatos/bd.php");

if (isset($_GET))
{
    $id=trim($_GET['id']);
    if(!empty(get_by_ID($id)))
    {
        $datosproducto=get_by_ID($id);
    }
}
else if (isset($_POST['guardar']))
{
       
    $producto=trim($_POST['producto']);
    $imagen="";
    $extension=$_FILES['imagen']['type'];

    $arrayerrores=[];
    $valores=[];


    if(isset($id))
    {
        if(!empty($id))
        {
            $valores[0]=$id;
        }
    }
    else
    {

    }

   

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" name="input" action="" method="post">

        <label>ID</label>
        <input type="text" name="id"/>
        </br>

        <label>PRODUCTO</label>
        <input type="text" name="producto">
        </br>

        IMAGEN: <input name="fichero_imagen" type="file" /></br>
        

        <input type="submit" value="GUARDAR" name="guardar" >
        
    </form> 
    
</body>
</html>