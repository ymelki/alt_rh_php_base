<?php
function connect_bd(){
    // 1 Connexion à la BD
    $user = "root";
    $pass = "";
    $dnspdo = 'mysql:dbname=boutique;host=localhost;charset=utf8';

    $PDO = new PDO($dnspdo, $user, $pass);
    return $PDO;
}
?>