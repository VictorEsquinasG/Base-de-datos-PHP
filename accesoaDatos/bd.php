<?php
/*
    abreConexion();
    $resultado = abreConexion()->query("SELECT * FROM producto");
    while ($registro = $resultado->fetch()) {
        for ($i=0;$registro = $resultado->fetch();$i++){
             $producto[$i] = [$registro['ID'],$registro['nombre'],$registro['imagen']];
        }
       
    }
var_dump($producto);
*/

function abreConexion(){
    $dwes = new PDO("mysql:host=localhost;dbname=productos", "root");
    return $dwes;
}

function get_by_ID( $id ){

    $resultado = abreConexion()->query("SELECT * FROM producto where id=$id");
    while ($registro = $resultado->fetch()) {

        $producto = [$registro['ID'],$registro['nombre'],$registro['imagen']];
    }
    return $producto;
}

function get_All(){
    $resultado = abreConexion()->query("SELECT * FROM producto");
    
    while ($registro = $resultado->fetch()) {
        for ($i=0;$registro = $resultado->fetch();$i++){
            $productos[$i] = [$registro['ID'],$registro['nombre'],$registro['imagen']];
       }
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

    $resultado = abreConexion()->exec("DELETE from producto where ID $id");
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

