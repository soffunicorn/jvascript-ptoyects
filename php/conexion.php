<?php

try{
    $dsn = "mysql:host=localhost;dbname=cadi;";
$conexion = new PDO($dsn,"root",""); 

}
catch(Exception $e){
    echo "error:".$e->getMessage();
}
