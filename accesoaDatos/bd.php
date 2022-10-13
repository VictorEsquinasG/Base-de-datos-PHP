<?php

function get_by_ID( $id ){

    $dwes = new PDO("mysql:host=localhost;dbname=productos", "root");
    $resultado = $dwes->query("SELECT * FROM producto where id=$id");
    while ($registro = $resultado->fetch()) {
        echo "id ".$registro['ID'].": ".$registro['nombre']."<br />";
    }

}

function get_All(){
    
}

function insert_New(){
    
}

function delete_by_ID(){
    
}

function update_by_ID(){
    
}

