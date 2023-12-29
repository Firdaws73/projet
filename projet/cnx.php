<?php
include "db.php";
function cnx_pdo(){
//DSN 
$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

//----------connexion----------
try{
    $db = new PDO($dsn,DBUSER,DBPASS);
    //echo "connexion établie";
    return $db;

}catch(PDOException $e){
    die($e->getMessage());
}

}


?>