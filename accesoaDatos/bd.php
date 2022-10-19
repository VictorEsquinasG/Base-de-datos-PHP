
<?php
/*
$resultado = abreConexion()->query("SELECT * FROM producto");
    
while ($registro = $resultado->fetch()) {
    for ($i=0; $registro = $resultado->fetch() ;$i++){
        $productos[$i] = [$registro['ID'],$registro['nombre'],$registro['imagen']];
        var_dump($productos);
   }
}
*/



/*
vosotros en el fichero debereis poner mi IP "192.168.121.92"
el orden en el fichero será la siguiente;
"IP";"nombre de la base de datos";"contraseña"
192.168.121.92;productos;Usuario1234.
*/
function abreConexion(){
    $ruta= "../accesoaDatos/host.csv";
    $fichero=file_get_contents($ruta);
    
    $separa=explode(";",$fichero);

    $dwes = new PDO("mysql:host=".$separa[0].";dbname=".$separa[1], "root",$separa[2]);
    return $dwes;
}

function get_by_ID( $id ){

    $resultado = abreConexion()->query("SELECT * FROM producto where id=$id");
    
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) 
    {
        $producto[] = $registro;
    }
   
    return $producto;
}

function get_All(){
    $resultado = abreConexion()->query("SELECT * FROM producto");
    
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) 
    {
        $productos[] = $registro;
    }
   
    return $productos;
}

/*
$valores es un array donde el valor 0 es la id
                           el valor 1 es el nombre
                           el valor 2 es la imagen
*/
function insert_New( $valores){ 

    $resultado = abreConexion()->exec("INSERT INTO producto (nombre, imagen) VALUES ($valores[1],$valores[2])");
    return $resultado == 1;
}

function delete_by_ID($id){

    $resultado = abreConexion()->exec("DELETE from producto where ID = $id");
    return $resultado == 1;
}

/*
$valores es un array donde el valor 0 es la id
                           el valor 1 es el nombre
                           el valor 2 es la imagen
*/
function update_by_ID( $valores){

    $resultado = abreConexion()->exec("UPDATE productos SET nombre = $valores[1], 
                                                            imagen = $valores[2] WHERE (ID = $valores[0])");
    
    return $resultado == 1;
}

