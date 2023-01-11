<?php
session_start();
try {
    $db = new PDO('mysql:host=localhost; dbname=phpFormation;charset=utf8', 'root' , '');
}
catch(PDOException $e){
    echo "la connection a echoué:" . $e->getMessage();
}
?>