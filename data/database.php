<?php
$db = new PDO('mysql:host=localhost; dbname=financiera', 'sise', 'sise123');
if(!$db){
    echo "Error al conectar la base de datos";
    exit;
}
?>